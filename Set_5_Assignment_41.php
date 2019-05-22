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
$repeat_element = $arrone[0];
$loop = $arrone[1];
while($loop)
{
    echo $repeat_element;
    echo "</br>";
    $loop--;
}

?>