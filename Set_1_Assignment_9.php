<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$i = 0 ;
while(! feof($stdin))  {
    $result[$i] = fgets($stdin);
    $i++;
  }
$sum = 0;
$dum_index = 0;
$len = strlen($result[0]);
for ($i=0;$i<$len;$i++){
    if($result[0][$i]!=" "){
        $arrone[$dum_index] = $result[0][$i];
        $dum_index++;
    }
}
$k = $arrone[0];
$n = $arrone[1];
$dum_index = 0;
$len = strlen($result[1]);
for ($i=0;$i<$len;$i++){
    if($result[1][$i]!=" "){
        $arrtwo[$dum_index] = $result[1][$i];
        $dum_index++;
    }
}
for($i=0;$i<$n;$i++){
    if($arrtwo[$i]==$k){
        while($i+1){
            $sum += $arrtwo[$i];
            $i--;
        }
        break;
    }
}
echo $sum;
?>
