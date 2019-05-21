<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$len = strlen($in);
$dum_index = 0;
for($i=0;$i<$len;$i++)
{
    if($in[$i]!=" ")
    {
        $arrone[$dum_index] .= $in[$i];
    }
    elseif($in[$i]==" ")
    {
        $dum_index++;
    }
}
$a = $arrone[0]^$arrone[1];
$b = $a^$arrone[1];
$a = $a^$b;
echo $a.' '.$b;
?>