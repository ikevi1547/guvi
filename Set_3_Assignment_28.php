<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$i = 0 ;
while(! feof($stdin))  {
    $result[$i] = fgets($stdin);
    $i++;
  }
  $j = 0;
  $len = strlen($result[1]);
for($i=0;$i<$len;$i++){
    if($result[1][$i]!=" ")
    {
        $arrone[$j] .= $result[1][$i];
    }
    elseif($result[1][$i]==" ")
    {
        $j++;
    }
}   
for($i=0;$i<$result[0];$i++){
    echo $arrone[$i].' '.$i;
    echo '</br>';
}
?>
