<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$hours = (int) ($in/60);
$min = (float) ($in/60);
$min = $min-$hours;
$min = (int) ($min*60);
echo $hours;
echo " ";
echo $min;
?>