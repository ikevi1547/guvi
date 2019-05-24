<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$dum = 0;
for($i=0;$i<strlen($in);$i++)
    {
        if($in[$i]!=" ")
            {
                $arrone[$dum] .= $in[$i];
            }
        elseif($in[$i]==" ")
            {
                $dum++;
            }
    }
$N = $arrone[1];
$len = strlen($arrone[0]);
for($i=$len-$N;$i<$len;$i++)
    {
        echo $arrone[0][$i];
    }
?>