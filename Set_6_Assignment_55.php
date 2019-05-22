<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in= fgets($stdin);
$dum = 0;
for($i=0;$i<strlen($in);$i++){
    if($in[$i]!=" "){
        $arrone[$dum] .= $in[$i];
    }
    elseif($in[$i]==" "){
        $dum++;
    }
}
$prod_of_two_numbers = $arrone[0]*$arrone[1];
if($prod_of_two_numbers%2==0){
    echo "even";
}
else{
    echo "odd";
}
?>  