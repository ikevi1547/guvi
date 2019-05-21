<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$len = strlen($in);
$dum_index = 0;
for($i=0;$i<$len;$i++){
    if($in[$i]!=" "){
        $arrone[$dum_index] .= $in[$i];
    }
    elseif($in[$i]==" "){
        $dum_index++;
    }
}
$armstrong_output = 0;
$start = $arrone[0];
$end = $arrone[1];
$check_armstrong_number = $start+1;
while(1)
{
$len = strlen($check_armstrong_number);
$temp_loop = $len;
$mul = 1;
$split_value = str_split($check_armstrong_number);
for($i=0;$i<$len;$i++){
    while($temp_loop){
        $mul *= $split_value[$i];
        $temp_loop--;
    }
    $armstrong_output += $mul;
    $temp_loop = $len;
    $mul = 1;
}
if($armstrong_output==$check_armstrong_number){
    $output .= $armstrong_output;
    $output .= " ";
}
$armstrong_output = 0;
$check_armstrong_number++;
if($check_armstrong_number==$end){
    break;
}
}
echo $output;
?>