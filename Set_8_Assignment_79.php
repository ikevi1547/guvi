<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$sqr_num = (int) (sqrt($in));
if(($sqr_num*$sqr_num)==$in)
    {
        echo "yes";
    }
else
    {
        echo "no";
    }
?>