<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$i = 0 ;
while(! feof($stdin))  {
    $result[$i] = fgets($stdin);
    $i++;
  }
$sum = 0;
$k = $result[0][1];
$n = $result[0][0];
for($i=0;$i<$n;$i++){
    if($result[1][$i]==$k){
        while($i+1){
            $sum += $result[1][$i];
            $i--;
        }
        break;
    }
}
echo $sum;
?>