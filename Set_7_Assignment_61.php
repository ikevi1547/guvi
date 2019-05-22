<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$dum = 0;
for($i=0;$i<strlen($in);$i++)
    {
        if($in[$i]!=" ")
            {
                $arrone[$dum] .= trim($in[$i]);
            }
        elseif($in[$i]==" ")
            {
                $dum++;
            }
    }
for($i=0;$i<$arrone[1];$i++)
    {
        echo $arrone[0][$i];
    }
?>