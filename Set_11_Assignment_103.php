<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$dum = 0;
$flag = true;
for($i=0;$i<strlen($in);$i++)
    {
        if($in[$i]!==" "&&$flag)
            {
                $in[$i] = strtoupper($in[$i]);
                $flag = false;
            }
        elseif($in[$i]==" ")
            {
                $flag = true;
            }
    }
echo $in;
?>