<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$in += $in;
echo $in;
?>