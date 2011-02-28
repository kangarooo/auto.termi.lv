# -*- coding: utf-8 -*-
from Skype4Py.api.posix_x11 import threads_init
threads_init()
import Skype4Py

#class AppEvents:
#    def OnMessageStatus(Message, Status):
#	if Status == 'RECEIVED':
#		print(Message.FromDisplayName + ': ' + Message.Body);
#	if Status == 'SENT':
#		print('Myself: ' + Message.Body);
# Create an instance of the Skype class.
skype = Skype4Py.Skype()#Events=AppEvents())

def OnMessageStatus(Message, Status):
    print 'status fired'
    if Status == 'RECEIVED':
            print(Message.FromDisplayName + ': ' + Message.Body);
    if Status == 'SENT':
            print('Myself: ' + Message.Body);
skype.RegisterEventHandler('MessageStatus', OnMessageStatus)
skype.Attach()







#loop
Cmd = '';
while not Cmd == 'exit':
	Cmd = raw_input('');