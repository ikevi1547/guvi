<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$len = strlen($in);
$temp_loop = $len;
$mul = 1;
$armstrong_output = 0;
for($i=0;$i<$len;$i++){
    while($temp_loop){
        $mul *= $in[$i];
        $temp_loop--;
    }
    $armstrong_output += $mul;
    $temp_loop = $len;
    $mul = 1;
}
if($armstrong_output==$in){
    echo "yes";
}
else{
    echo "no";
}
?>
