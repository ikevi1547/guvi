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
echo (trim($arrone[0])*trim($arrone[1])*trim($arrone[2]))/100;
