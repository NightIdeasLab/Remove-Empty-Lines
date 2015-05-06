#!/usr/bin/php
<?php
$fp = fopen('php://stdin', 'r');
//$fp = fopen("test.php", "r") or die("Unable to open file!");;
//echo '<plaintext>'; // renders everything following the start tag as raw text
while ( $line = fgets($fp, 4096) )
	echo preg_replace("/(^[\r\n]*|[\n]+)[\s\t]*[\r\n]+/", "", $line);
fclose($fp);
?>