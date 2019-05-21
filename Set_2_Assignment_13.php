<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
if($in>1){
if($in%2==0||$in%3==0||$in%4==0||$in%5==0||$in%6==0||$in%7==0||$in%8==0||$in%9==0){
    echo "no";
}
else{
    echo "yes";
}
}
else{
	echo "no";
}
?>