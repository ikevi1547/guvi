<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in= fgets($stdin);
$dum_index = 0;
for($i=0;$i<strlen($in);$i++)
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
echo $arrone[0]+$arrone[1];
?>