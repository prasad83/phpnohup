<?php

include_once dirname(__FILE__) . '/nohup.php';

// Trigger the sleep for 'n' seconds
$command = sprintf('php -f %s/tests/test.sleep.php -- 50', dirname(__FILE__));

/**
 * Run the command / check for its status
 */
if (count($argv) > 1) {
	$pid = $argv[1];
	echo (PHPNohup::check($pid)? 'running' : 'finished') . "\n";
} else {
	$pid = PHPNohup::background($command);
	echo "PID: " . $pid;
}
