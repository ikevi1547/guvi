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
$check_even_numbers = $start+1;
while($i){
if($check_even_numbers%2==0){
    $even_numbers .= $check_even_numbers;
    $even_numbers .= " "; 
}
$check_even_numbers++;
if($check_even_numbers==$end){
    break;
}
}
echo $even_numbers;

?>