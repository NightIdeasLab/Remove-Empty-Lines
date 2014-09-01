#!/usr/bin/php
<?php
$fp = fopen('php://stdin', 'r');
while ( $line = fgets($fp, 4096) )
	echo preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "", $line);
fclose($fp);
?>