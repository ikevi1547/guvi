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
for($i=0;$i<10;$i++){
    for($j=$i+1;$j<10;$j++)
    {
        if($arrone[0]<$arrone[$j])
        {
            $temp = $arrone[$j];
            $arrone[$j] = $arrone[$i];
            $arrone[0] = $temp;
        }
    }
}
echo $arrone[0];
?>