<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
while($in)
    {
        $sum += $in;
        $in--;
    }
echo $sum;
?>  