<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$dum = 0;
while(!feof($stdin))
    {
        $in[$dum] = fgets($stdin);
        $dum++;
    }
$dum = 0;
for($i=0;$i<strlen($in[1]);$i++)
    {
        if($in[1][$i]!=" ")
            {
                $arrone[$dum] .= $in[1][$i];
            }
        elseif($in[1][$i]==" ")
            {
                $dum++;
            }
    }
$len = trim($in[0]);
for($i=0;$i<$len;$i++)
    {
        $sum += $arrone[$i];
    }
echo $sum;