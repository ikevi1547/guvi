<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = trim(fgets($stdin));
echo ord($in);
?>