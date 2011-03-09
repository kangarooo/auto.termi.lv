<?php
//termi.lv
/////////////////////////////////////////////////////////////////
defined( '_V' ) or die( 'Restricted access' );
/////////////////////////////////////////////////////////////////
Class Edit
{
    var $_db;
    var $_table;
    function Edit($db, $edit)
    {
        $this->_db=$db;
        $this->edit = $edit;
    }
    //////////////////////////////////////////////////////////////////////
    function recursive_name($array, $id, $level = 0)
    {
        static  $return;
        foreach($array[$id] as $item){
            $return[$item['id']] = $item;
            $return[$item['id']]['name'] = str_repeat('&nbsp;', $level*4).$return[$item['id']]['name'];
            if(!empty($array[$item['id']]) && !empty($item['id'])){
                $this->recursive_name($array, $item['id'], $level+1);
            }
        }
        return $return;
    }
    //////////////////////////////////////////////////////////////////////
    function loadAll()
    {
        $viewFields = array_keys($this->getFields('view_fields', array('delete', 'outLink')));
        $withParents = end($this->getFields('view_fields', array(), array('parent')));
        $ordering = (array_key_exists('ordering', $this->edit)) ? $this->edit['ordering'] : false;
                $where = (array_key_exists('where', $this->edit)) ? $this->edit['where'] : false;
                foreach($viewFields as $f){
                    if(array_key_exists($f, $_GET)){
                        if(!$where)
                            $where = array();
                        $where[$f] = $_GET[$f];
                        $this->edit['params'][$f] = $where[$f];
                    }
                }
                array_walk($viewFields, 'prefix_key_compare_item', array('o', ' AS ', true));
        if($ordering)
            array_walk($ordering, 'prefix_key_compare_item', 'o');
        if($where)
            array_walk($where, 'prefix_key_compare_item', array('o', '='));
        $this->objects = $this->_db->sqla("
            SELECT
                ".implode(', ', $viewFields)."
            FROM
                `#__".$this->edit['table']."` AS o
            ".($where ? "
            WHERE
                ".implode(' AND ', $where)."
            " : '')."
            ".($ordering ? "
            ORDER BY
                ".implode(', ', $ordering)."
            " : '')."
            LIMIT 2000
        ", $withParents ? array($withParents['name'], 'id') : 'id', true);
//        dmp($this->objects); die;
                if($withParents){
                $this->edit['view_fields'][$withParents['name']]['type']='hidden';
                $this->objects = $this->recursive_name($this->objects, 0);
        }
    }
    ////////////////////////////////////////////////////////////////////////////
    public function saveAll()
    {
        $newValues = false;
        foreach($this->getFields() as $f=>$key){
            if(array_key_exists('type', $key)){
                switch($key['type']){
                    case 'textAll':
                        if(arg('action')=='allEdit'){
                            if($this->saveField($f)){
                                $newValues = true;
                            }
                        }
                    break;
                    case 'yesno':
                        if($this->yesno($f)){
                            if(array_key_exists('after', $key)){
                                if($key['after']=='die')
                                    die;
                            }
                            refresh($_SERVER["HTTP_REFERER"]);
                        }
                    break;
                    case 'delete':
                        $id = arg($f);
                        if(!empty($id)){
                            if(array_key_exists('function', $key)){
                                if(!call_user_func($key['function'], $f)){
                                    continue;
                                }
                            }
                            if($this->delete($f)){
                                if(array_key_exists('after', $key)){
                                    if($key['after']=='die')
                                        die;
                                }
                                refresh($_SERVER["HTTP_REFERER"]);
                            }
                        }
                    break;
                }
            }
        }
        //lets reload
        if($newValues){
            $this->loadAll();
        }
    }
    ////////////////////////////////////////////////////////////////////////////
    private function yesno($field)
    {
        $id = arg($field);
        if(empty($id)){
            return;
        }
        $this->_db->squp("
            UPDATE
                `#__".$this->edit['table']."`
            SET
                `$field`=(`$field`+1)%2
            WHERE
                `id`='$id'
        ");
        return true;
    }
    ////////////////////////////////////////////////////////////////////////////
    private function delete($field)
    {
        $id = arg($field);
        if(empty($id)){
            return;
        }
        $this->_db->sqde("
            DELETE FROM
                `#__".$this->edit['table']."`
            WHERE
                `id`='$id'
            LIMIT
                1
        ");
        return true;
    }
    ////////////////////////////////////////////////////////////////////////////
    private function saveField($field)
    {
        $newValuesAccept = false;
        $newValues = (arg($field));
        foreach($this->objects as $key=>$v){
            if($this->objects[$key][$field]!=$newValues[$v['id']]){
                if($this->_db->squp("
                    UPDATE
                        `#__".$this->edit['table']."`
                    SET
                        `$field`='".$this->_db->sqst($newValues[$v['id']])."'
                    WHERE
                        `id`='".$v['id']."'
                    LIMIT 1
                ")){
                    $newValuesAccept = true;
                }
            }
        }
        return $newValuesAccept;
    }
    ////////////////////////////////////////////////////////////////////////////
    public function loadOne($id)
    {
        $viewFields = array_keys($this->getFields('edit_fields', array('reference', 'selfReference', 'params')));
        array_walk($viewFields, 'prefix_key_compare_item', array('o', ' AS ', true));
        $this->oneObject = $this->_db->sql1("
            SELECT
                ".implode(', ', $viewFields)."
            FROM
                `#__".$this->edit['table']."` AS o
            WHERE
                `id`='$id'
            LIMIT
                1
        ");
        $references = $this->getFields('edit_fields', array(), array('reference'));
        if($references){
                foreach($references as $r){
                        $this->edit['edit_fields'][$r['name']] = array_merge($r, array(
                                'possible'=>$this->_db->sqla("
                                    SELECT
                                        `id`, `".$r['field']."`
                                    FROM
                                        `#__".$r['table']."`
                                ", 'id', true)
                        ));
                        $referencesValues = $this->_db->sqla("
                            SELECT
                                `".$r['table']."_id`
                            FROM
                                `#__".$this->edit['table']."_".$r['table']."`
                            WHERE
                                `".$this->edit['table']."_id`='$id'
                        ", $r['table']."_id", true);
                        $this->oneObject[$r['name']]=serialize($referencesValues ? array_keys($referencesValues) : false);
                }
        }
        $withParents = end($this->getFields('edit_fields', array(), array('parent')));
        if($withParents){
                $this->edit['edit_fields'][$withParents['name']] = array(
                    'type'=>'option'
                    , 'possible'=>array_merge(array(
                                array('id'=>0, 'name'=>'')
                            )
                            , $this->_db->sqla("
                                    SELECT
                                        `id`, `name`
                                    FROM
                                        `#__".$this->edit['table']."`
                                    WHERE
                                        `id`<>'$id'
                                ", 'id', true)
                        )
                );
        }
        $this->loadOneParams();
        return $this->oneObject;
    }
    ////////////////////////////////////////////////////////////////////////////
    private function loadOneParams(){
        $params = $this->getFields('edit_fields', array(), array('params'));
        if(!$params)
            return false;
        foreach($params as $key=>$p){
            $where = array_key_exists('where', $p) ? $p['where']: false;
            if(array_key_exists('field', $p))
                $where[$p['field']]=$this->oneObject[$p['field']];
            $ordering = array_key_exists('ordering', $p) ? $p['ordering']: false;
            if($where)
                array_walk($where, 'prefix_key_compare_item', array('o', '='));
            if($ordering)
                array_walk($ordering, 'prefix_key_compare_item', 'o');
            $values = $this->_db->sqla("
               SELECT
                    o.`id`, o.`name`, o.`type`, o.`variable`
               FROM
                    `#__".$p['table']."` AS o
               ".($where ? "
                WHERE
                        ".implode(' AND ', $where)."
                " : '')."
               ".($ordering ? "
                ORDER BY
                    ".implode(', ', $ordering)."
                " : "")."
            ");
            if($values)
                foreach($values as $v){
                    $possible = false;
                    $unique = $v['type'].'_'.$v['id'];
                    if(in_array($v['type'], array('option', 'multiple'))){
                        $pos = explode(';', $v['variable']);
                        foreach($pos as $key=>$var){
                            $possible[]=array('id'=>$key, 'name'=>$var);
                        }
                    }
                    $this->edit['edit_fields'][$unique] = array(
                        'name'=>$v['name'],
                        'unique'=>$unique,
                        'type'=>$v['type'],
                        'possible'=>$possible,
                        'table'=>$p['table'],
                        'category'=>$v['id']
                    );
                    $this->oneObject[$unique] = $this->loadOneParamsValue($v, $p);
                }
        }
        $this->edit['edit_fields']['params_end']=array('type'=>'params_end');
    }
    ////////////////////////////////////////////////////////////////////////////
    //$v - params value, $p - params
    private function loadOneParamsValue($v, $p){
        switch($v['type']){
            case 'option':
            case 'multiple':
                $values = $this->_db->sqla("
                    SELECT
                        o.`value`
                    FROM
                        `#__".$p['table']."_".$v['type']."` AS o
                    WHERE
                        o.`category`=".$v['id']." AND o.`source`=".$this->oneObject['id']."
                ");
                if($values&&$v['type']=='option'){
                    return $values[0]['value'];
                } elseif($v['type']=='option'){
                    return '';
                }
            
                $active = array();
                if($values)
                    foreach($values as $m)
                        $active[]=$m['value'];
                return serialize($active);
            break;
        }
        return '';
    }
    ////////////////////////////////////////////////////////////////////////////
    public function createNew()
    {
        $fields = $this->getFields('edit_fields', array('id', 'reference', 'selfReference', 'params'));
        foreach(array_keys($fields) as $f){
            $this->oneObject[$f]=(arg($f) ? arg($f) :
                                ($fields[$f]&&array_key_exists('default', $fields[$f]) ? $fields[$f]['default'] : ''));
        }
    }
    ////////////////////////////////////////////////////////////////////////////
    public function createNewElement()
    {
        $fields = array();
        $values = array();
        foreach($this->oneObject as $field=>$value){
                if($field=='id'){
                        continue;
                }
                $fields[]="`$field`";
                $values[]="'$value'";
        }
        $this->oneObject['id'] = $this->_db->sqin("
            INSERT INTO
                `#__".$this->edit['table']."`
                (".implode(',', $fields).")
            VALUES
                (".implode(',', $values).")
        ");
    }
    ////////////////////////////////////////////////////////////////////////////
    private function updateReference($field, $prev, $value)
    {
        $prev = unserialize($prev);
        $prev = $prev ? $prev : array();
        $value = $value ? $value : array();
        $updated = false;
        if(!$field['possible']){
                return false;
        }
        foreach(array_keys($field['possible']) as $id){
                if(in_array($id, $prev)&&!in_array($id, $value)){
                        $this->_db->sqde("
                            DELETE FROM
                                `#__".$this->edit['table']."_".$field['table']."`
                            WHERE
                                `".$field['table']."_id`='".$this->oneObject['id']."' AND `".$field['table']."_id`='$id'
                            ");
                        $updated = true;
                }
                if(!in_array($id, $prev)&&in_array($id, $value)){
                        $this->_db->sqin("
                            INSERT INTO
                                `#__".$this->edit['table']."_".$field['table']."`
                                (`".$this->edit['table']."_id`, `".$field['table']."_id`)
                            VALUES
                                ('".$this->oneObject['id']."', '$id')
                            ");
                        $updated = true;
                }
        }
        $this->oneObject[$field['name']]=serialize($value);
        return $updated;
    }
    ////////////////////////////////////////////////////////////////////////////
    private function updateParams($field, $prev, $value){
        switch($field['type']){
            case 'option':
                if($prev==$value)
                    return false;
                if($prev==''){
                    $this->_db->sqin("
                        INSERT INTO
                            `#__".$field['table']."_".$field['type']."`
                            (`category`, `source`, `value`)
                        VALUES
                            ('".$field['category']."', '".$this->oneObject['id']."', '$value')
                        ");
                } else {
                    $this->_db->squp("
                        UPDATE
                            `#__".$field['table']."_".$field['type']."`
                        SET
                            `value`='$value'
                        WHERE
                            `category`='".$field['category']."' AND
                             `source`='".$this->oneObject['id']."'
                        ");
                }
                $this->oneObject[$field['unique']]=$value;
                return true;
            break;
            case 'multiple':
                $prev = unserialize($prev);
                $prev = $prev ? $prev : array();
                $value = $value ? $value : array();
                $updated = false;
                foreach(array_keys($field['possible']) as $id){
                    if(in_array($id, $prev)&&!in_array($id, $value)){
                            $this->_db->sqde("
                                DELETE FROM
                                    `#__".$field['table']."_".$field['type']."`
                                WHERE
                                    `source`='".$this->oneObject['id']."' AND `category`='".$field['category']."' AND `value`='$id'
                                ");
                            $updated = true;
                    }
                    if(!in_array($id, $prev)&&in_array($id, $value)){
                            $this->_db->sqin("
                                INSERT INTO
                                    `#__".$field['table']."_".$field['type']."`
                                    (`source`, `category`, `value`)
                                VALUES
                                    ('".$this->oneObject['id']."', '".$field['category']."', '$id')
                                ");
                            $updated = true;
                    }
                }
                $this->oneObject[$field['unique']]=serialize($value);
                return $updated;
            break;
        }
        dmp($field);
        dmp($prev);
        dmp($value);
    }
    ////////////////////////////////////////////////////////////////////////////
    public function saveOne($update = false)
    {
        $fields = $this->getFields('edit_fields', array('hidden'));
        $saveValues=array_keys($fields);
        $updateStr=false;
        $showUpdate=false;
        $params = false;
        foreach($saveValues as $v){
            if($fields[$v]['type']=='params')
                    $params = true;

            if($fields[$v]['type']=='params_end')
                    $params = false;
            
            if(in_array($fields[$v]['type'], array('params', 'params_end', 'view')))
                continue;
            
            if($params){
                if($this->updateParams($fields[$v], $this->oneObject[$v], arg($v)))
                    $showUpdate[]=lng('value of')." <strong>".(array_key_exists('name', $fields[$v]) ? $fields[$v]['name'] : lng($v))."</strong> ".lng('updated');
                continue;
            }
            

            if($fields[$v]['type']=='reference'){
                if($this->updateReference($fields[$v], $this->oneObject[$v], arg($v))){
                        $showUpdate[]=lng('value of')." <strong>".lng($v)."</strong> ".lng('updated');
                }
                continue;
            }
            if(array_key_exists('function', $fields[$v])){
                $getChanged = call_user_func($fields[$v]['function'], $v, $this->oneObject['id'], $this->oneObject);
            } elseif(is_array(arg($v))){
                $getChanged = serialize(arg($v));
            } else {
                $getChanged = arg($v);
            }
            if($this->oneObject[$v]!=$getChanged){
                $this->oneObject[$v]=$getChanged;
                $getChanged= ($getChanged=='now' ? "NOW()" : "'".$this->_db->sqst($getChanged)."'");
                $updateStr[]="`$v`=$getChanged";
                $showUpdate[]=lng('value of')." <strong>".lng($v)."</strong> ".lng('updated');
            }
        }
        if(!empty($updateStr) && count($updateStr)>0){
            $this->_db->squp("
                UPDATE
                    `#__".$this->edit['table']."`
                SET
                    ".implode(',', $updateStr)."
                WHERE
                    `id`='".$this->oneObject['id']."'
                LIMIT 1
            ");
        }
        if($update)
                refresh($this->oneObject['id'].'/');
        if($showUpdate)
            return implode(', ', $showUpdate);
        return false;
    }
    ////////////////////////////////////////////////////////////////////////////
    public function getFields($type = 'view_fields', $diselect = array(), $only = array())
    {
        $fields = array();
        foreach($this->edit[$type] as $key=>$f){
            if((is_array($f)&&array_key_exists('type', $f)&&in_array($f['type'], $diselect)) |
                (count($only)>0&&!(is_array($f)&&array_key_exists('type', $f)&&in_array($f['type'], $only)))
                ){
                    continue;
            }
            $fields[is_array($f) ? $key : $f] = array_merge((array)$f, array('name'=>is_array($f) ? (array_key_exists('name', $f) ? $f['name'] : lng($key)) : lng($f)));
                }
        return $fields;
    }
    ////////////////////////////////////////////////////////////////////////////
        public function getEditParams(){
            if(isset($this->edit['params'])){
                    $param = array();
                    foreach($this->edit['params'] as $key=>$p){
                        $param[] = "$key=$p";
                    }
                    return implode('&amp;', $param);
            }
            return '';
        }
    ////////////////////////////////////////////////////////////////////////////
    public function getObjects()
    {
        return $this->objects;
    }
    ////////////////////////////////////////////////////////////////////////////
    public function getOneObject()
    {
        return $this->oneObject;
    }
    ////////////////////////////////////////////////////////////////////////////
}