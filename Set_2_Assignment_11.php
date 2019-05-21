<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$n = $in[0];
$k = $in[1];
$output = 1;
while($k){
    $output *= $n;
    $k--;
}
echo $output;
?>