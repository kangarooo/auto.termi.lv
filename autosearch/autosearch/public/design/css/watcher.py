import time
import fcntl
import os
import signal
import sys
from hashlib import md5
import pkg_resources

pkg_resources.require("CleverCSS")

import clevercss


files = [
    'clevercssdefine.css',
    'layout.css',
    'style.css',
    'content.css'
]
md5s = {}
for file in files:
    md5s[file] = ''
def convert():
    str = ''
    for file in files:
        str += open(file, 'r').read()
    try:
        open(sys.argv[1], 'w').write(clevercss.convert(str))
    except Exception as inst:
        print inst
        print type(inst)
        print inst.args
while True:
    for file in files:
        mdn = md5(open(file, 'r').read()).hexdigest()
        if mdn != md5s[file]:
            md5s[file] = mdn
            print 'reloading...'
            convert()
    time.sleep(1)

