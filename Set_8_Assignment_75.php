<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
if(strlen($in)%2==0)
    {
        $mid = strlen($in)/2;
        $in[$mid] = '*';
        $in[$mid-1] = '*';
    }
else
    {
        $mid = (int) (strlen($in)/2);
        $in[$mid] = '*';
    }
echo $in;
?>