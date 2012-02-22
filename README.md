# PHPNohup - execute in background.

Running heavy duty function call when HTTP request comes to PHP poses challenge to send swift response. 

These heavy duty function call can be run stateless at the background. But there is not easy with to achieve this.

PHPNohup is a utility to enable running such stateless script in background and checking its status using PID.

NOTE: It expects (nohup, ps) system command availability.

If you are on windows, [gnuwin32 coreutils](http://gnuwin32.sourceforge.net/packages/coreutils.htm) should help.
