<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
if(is_numeric($in)){
    echo "yes";
}
else{
    echo "no";
}
?>