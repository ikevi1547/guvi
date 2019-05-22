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
$sum = 0;
for($i=0;$i<$len;$i++)
{
    $sum += $in[$i];
}
$output = (int) ($sum/$result[0]);
echo $output;

?>