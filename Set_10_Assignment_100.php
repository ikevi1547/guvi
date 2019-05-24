<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$output = 1;
for($i=0;$i<strlen($in);$i++)
    {
        $output *= $in[$i];
    }
echo $output;
?>