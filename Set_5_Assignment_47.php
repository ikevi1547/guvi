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
$len = count($in);
$n=0;
for ($i=0;$i<$len;$i++){
    for($j=$i+1;$j<$len;$j++){
    if($in[0]>$in[$j])
    {
           $temp_data = $in[$j];
           $in[$j] = $in[$i];
           $in[0] = $temp_data;
    }
    }
}
echo $in[0]." ";
for ($i=0;$i<$len;$i++){
    for($j=$i+1;$j<$len;$j++){
    if($in[0]<$in[$j])
    {
           $temp_data = $in[$j];
           $in[$j] = $in[$i];
           $in[0] = $temp_data;
    }
    }
}
echo $in[0];
?>