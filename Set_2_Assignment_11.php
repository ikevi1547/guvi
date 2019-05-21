<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$len = strlen($in);
$dum_index = 0;
for ($i=0;$i<$len;$i++){
    if($in[$i]!=" "){
        $arr[$dum_index] = $in[$i];
        $dum_index++;
    }
}
$n = $arr[0];
$k = $arr[1];
$output = 1;
while($k){
    $output *= $n;
    $k--;
}
echo $output;
?>
