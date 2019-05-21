<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$output = 0;
while($in){
    $output += $in;
    $in --;
}
echo $output;
?>