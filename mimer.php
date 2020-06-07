<?php
require 'IP2Location.php';
 
$loc = new IP2Location('databases/IP-COUNTRY.BIN', IP2Location::FILE_IO);
$record = $loc->lookup($_SERVER['REMOTE_ADDR'], IP2Location::ALL);
 
if($record == 'IN') {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: https://youtu.be/qn1jVQ27EIg');
    exit;
}
 
?>
