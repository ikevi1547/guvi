<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$len = strlen($in);
$count = 0;
for($i=0,$j=$len-1;$i<($len/2);$i++,$j--){
if($in[$i]==$in[$j]){
    $count++;
}
else{
    break;
}
}
if($len%2!=0){
    $check = ($len/2)+0.5;
}
else{
    $check = $len/2;
}
if($count==$check){
    echo "yes";
}
else{
    echo "no";
}
?>
