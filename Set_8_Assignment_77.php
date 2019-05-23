<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$count = 1;
while(1)
    {
        if($in%$count==0)
            {
                echo $count;
                echo " ";
            }
        $count++;
        if($count==$in+1)
            {
                break;
            }
    }
?>