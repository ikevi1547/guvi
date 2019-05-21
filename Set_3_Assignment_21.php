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
$N = $arrone[0];
$A = $arrone[1];
$D = $arrone[2];
$temp_run = 1;
while(1){
    $output += $A + (($temp_run-1)*$D);
    $temp_run++;
    if($temp_run==$N+1){
        break;
    }
}
echo $output;
?> 