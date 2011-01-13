def preparse(self, source):
        """
        Do the line wise parsing and resolve indents.
        """
        rule = (None, [], [])
        vars = {}
        imports = {}
        indention_stack = [0]
        state_stack = ['root']
        group_block_stack = []
        rule_stack = [rule]
        sub_rules = []
        root_rules = rule[1]
        macroses = {}
        new_state = None
        lineiter = LineIterator(source, emit_endmarker=True)

        def fail(msg):
            raise ParserError(lineno, msg)

        def parse_definition():
            m = _def_re.search(line)
            if not m is None:
                return lineiter.lineno, m.group(1), m.group(2)
            m = _macros_call_re.search(line)
            if not m is None:
                return lineiter.lineno, '__macros_call__', m.groups()[0]
            fail('invalid syntax for style definition')

        for lineno, line in lineiter:
            raw_line = line.rstrip().expandtabs()
            line = raw_line.lstrip()
            indention = len(raw_line) - len(line)
            print line
            print new_state
            # indenting
            if indention > indention_stack[-1]:
                if not new_state:
                    fail('unexpected indent')
                state_stack.append(new_state)
                indention_stack.append(indention)
                new_state = None

            # dedenting
            elif indention < indention_stack[-1]:
                for level in indention_stack:
                    if level == indention:
                        while indention_stack[-1] != level:
                            if state_stack[-1] == 'rule':
                                rule = rule_stack.pop()
                            elif state_stack[-1] == 'group_block':
                                name, part_defs = group_block_stack.pop()
                                for lineno, key, val in part_defs:
                                    rule[2].append((lineno, name + '-' +
                                                    key, val))
                            indention_stack.pop()
                            state_stack.pop()
                        break
                else:
                    fail('invalid dedent')

            # new state but no indention. bummer
            elif new_state:
                fail('expected definitions, found nothing')
            print state_stack[-1]
            # end of data
            if line == '__END__':
                break

            # root and rules
            elif state_stack[-1] in ('rule', 'root', 'macros'):
                # macros blocks
                if line.startswith('def ') and line.endswith(":")\
                        and state_stack[-1] == 'root':
                    s_macros = _macros_def_re.search(line).groups()[0]
                    if s_macros in vars:
                        fail('name "%s" already bound to variable' % s_macros)
                    new_state = 'macros'
                    macros = []
                    macroses[s_macros] = macros

                # new rule blocks
                if line.endswith(','):
                    sub_rules.append(line)

                elif line.endswith(':') and new_state!='macros':
                    sub_rules.append(line[:-1].rstrip())
                    s_rule = ' '.join(sub_rules)
                    sub_rules = []
                    if not s_rule:
                        fail('empty rule')
                    new_state = 'rule'
                    new_rule = (s_rule, [], [])
                    rule[1].append(new_rule)
                    rule_stack.append(rule)
                    rule = new_rule

                # if we in a root block we don't consume group blocks
                # or style definitions but variable defs
                elif state_stack[-1] == 'root':
                    if '=' in line:
                        m = _var_def_re.search(line)
                        if m is None:
                            fail('invalid syntax')
                        key = m.group(1)
                        if key in vars:
                            fail('variable "%s" defined twice' % key)
                        if key in macroses:
                            fail('name "%s" already bound to macros' % key)
                        vars[key] = (lineiter.lineno, m.group(2))
                    elif line.startswith("@"):
                      m = _import_re.search(line)
                      if m is None:
                        fail('invalid import syntax')
                      url = m.group(1)
                      if url in imports:
                          fail('file "%s" imported twice' % url)
                      if not os.path.isfile(url):
                        fail('file "%s" was not found' % url)
                      imports[url] = (lineiter.lineno, open(url).read())

                    else:
                        fail('Style definitions or group blocks are only '
                             'allowed inside a rule or group block.')

                # definition group blocks
                elif line.endswith('->'):
                    group_prefix = line[:-2].rstrip()
                    if not group_prefix:
                        fail('no group prefix defined')
                    new_state = 'group_block'
                    group_block_stack.append((group_prefix, []))

                # otherwise parse a style definition.
                else:
                    if state_stack[-1] == 'rule':
                        rule[2].append(parse_definition())
                    elif state_stack[-1] == 'macros':
                        macros.append(parse_definition())

            # group blocks
            elif state_stack[-1] == 'group_block':
                group_block_stack[-1][1].append(parse_definition())

            # something unparseable happened
            else:
                fail('unexpected character %s' % line[0])
        print macroses
        macroses['resetspace'] = [(11, 'margin', '0'), (12, 'padding', '0')]
        del root_rules[0]
        print root_rules
        return root_rules, vars, imports, macroses