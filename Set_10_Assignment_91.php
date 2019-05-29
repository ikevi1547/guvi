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
$l = trim($arrone[0]);
$b = trim($arrone[1]);
$h = trim($arrone[2]);
$TSA = 2*(($l*$b)+($l*$h)+($b*$h));
$volume = $l*$b*$h;
echo $TSA." ".$volume;