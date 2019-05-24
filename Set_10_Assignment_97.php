<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
for($i=strlen($in)-1;$i<strlen($in);$i--)
    {
        echo $in[$i];
        if($i==0)
        {
            break;
        }
    }
?>