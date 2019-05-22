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
$string_one = $arrone[0];
$string_two = $arrone[1];
if(strlen($string_one)>strlen($string_two))
{
    echo $string_one;
}
elseif(strlen($string_one)<=strlen($string_two))
{
    echo $string_two;
}

?>
