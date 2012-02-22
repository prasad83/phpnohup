<?php

class PHPNohup {
	// reference: http://nsaunders.wordpress.com/2007/01/12/running-a-background-process-in-php/
	static function background($command, $priority = 0) {
		if ($priority) {
			$pid = shell_exec("nohup nice -n $priority $command 1>/dev/null 2> /dev/null & echo $!");
		} else {
			$pid = shell_exec("nohup $command 1>/dev/null 2> /dev/null & echo $!");
		}
		return $pid;
	}
	
	static function check($pid) {
		exec("ps $pid", $process_state);
		return (count($process_state) >= 2);		
	}
	
	static function foreground($command) {
		return shell_exec($command);
	}
}