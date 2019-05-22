<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in= fgets($stdin);
if($in%2==0){
    echo $in;
}
else{
    while($in--){
        if($in%2==0){
            echo $in;
            break;
        }      
    }
}
?>  