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
$flag = true;
$check_prime_numbers = $start+1;
while($i){
    for($loop=2;$loop<=$check_prime_numbers/2; ++$loop){
        if($check_prime_numbers % $loop == 0){
            $flag = false;
        }
    }
    if($flag == true){
        $prime_numbers .= $check_prime_numbers;
        $prime_numbers .= " ";
    }
    $flag = true;
$check_prime_numbers++;
if($check_prime_numbers==$end){
    break;
}
}
echo $prime_numbers;

?>