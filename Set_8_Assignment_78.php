<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
if($in%13==0)
    {
        echo "yes";
    }
else
    {
        echo "no";
    }
?>