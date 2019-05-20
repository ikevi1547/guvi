<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$vowel = array('a','e','i','o','u');
$consonant = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
if(in_array($in,$vowel)){
    echo "Vowel";
}
elseif(in_array($in,$consonant)){
    echo "Consonant";
}
else{
    echo "invalid";
}
?>