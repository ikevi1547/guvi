<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$int_val = (int) $in;
if($int_val<$in)
    {
        echo $int_val+1;
    }
else
    {
        echo $int_val;
    }
?>