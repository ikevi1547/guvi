<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$valid_inp = strtolower($in);
$alphabetics = array('a','e','i','o','u','b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
if(in_array($valid_inp,$alphabetics)){
    echo "Alphabet";
}
else{
    echo "No";
}
?>