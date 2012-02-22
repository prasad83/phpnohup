<?php
/**
 * Script to sleep for specified period given via command-line.
 * 
 * (sleep for 10 seconds)
 * php -f test.sleep.php -- 10
 */
if (count($argv) > 1) {
	sleep(intval($argv[1]));
}
