#!/usr/bin/python
import shlex, subprocess
import sys
import time
command_line = sys.argv[2]
args = shlex.split(command_line)
def run(args, sleep):
    subprocess.call(args)
    time.sleep(sleep)
while(True):
    run(args, int(sys.argv[1]))

