import time
import fcntl
import os
import signal
import sys
from hashlib import md5
import pkg_resources

pkg_resources.require("CleverCSS")

import clevercss


FNAME = '.'
md = ''
mdn = ''
def convert():
    try:
        open(sys.argv[2], 'w').write(clevercss.convert(open(sys.argv[1], 'r').read()))
    except Exception as inst:
        print type(inst)
        print inst.args
while True:
    f1 = open(sys.argv[1], 'r')
    mdn = md5(f1.read()).hexdigest()

    if mdn != md:
        md = mdn
        convert()
        print 'reloaded'
    time.sleep(1)

