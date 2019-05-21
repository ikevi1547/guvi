<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$i = 0 ;
while(! feof($stdin))  {
    $result[$i] = fgets($stdin);
    $i++;
  }
$inp = $result[1];
$len = strlen($inp);
$j = 0;
for($i=0;$i<$len;$i++){
    if($inp[$i]!=" "){
        $in[$j] .= $inp[$i];
    }
    elseif($inp[$i]==" "){
        $j++;
    }
}
$n=0;
for ($i=0;$i<$result[0];$i++){
    for($j=$i+1;$j<$result[0];$j++){
    if($in[$i]>$in[$j]){
           $temp_data = $in[$j];
           $in[$j] = $in[$i];
           $in[$i] = $temp_data;
       }
    }
}
for($i=0;$i<$result[0];$i++){
    echo $in[$i];
    echo " ";
}
?>
