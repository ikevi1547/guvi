<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
if($in%4==0){
    if($in%100==0){
        if($in%400==0){
            echo "yes";
        }
        else{
            echo "no";
        }
    }
    else{
        echo "yes";
    }   
}
else{
    echo "no";
}
?>