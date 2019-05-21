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
$start = $arrone[0];
$end = $arrone[1];
$i = 1;
$check_odd_numbers = $start+1;
while($i){
if($check_odd_numbers%2!=0){
    $odd_numbers .= $check_odd_numbers;
    $odd_numbers .= " "; 
}
$check_odd_numbers++;
if($check_odd_numbers==$end){
    break;
}
}
echo $odd_numbers;

?>