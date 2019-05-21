<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$i = 0;
while(! feof($stdin))  {
    $result[$i] = fgets($stdin);
    $result[$i] .= " ";
    $i++;
  }
  $dum_index = 0;
for($i=0;$i<count($result);$i++){
    $len = strlen($result[$i]);
    for($j=0;$j<$len;$j++){
        if($result[$i][$j]!=" ")
        {
            $arrone[$dum_index] .= $result[$i][$j];
        }
        elseif($result[$i][$j]==" ")
        {
            $dum_index++;
        }
    }
}
$hours = abs($arrone[0]-$arrone[2]);
$min = abs($arrone[1]-$arrone[3]);
echo $hours.' '.$min;
?>