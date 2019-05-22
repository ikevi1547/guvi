<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in= fgets($stdin);
$num_word = array(
    "1" => "One",
    "2" => "Two",
    "3" => "Three",
    "4" => "Four",
    "5" => "Five",
    "6" => "Six",
    "7" => "Seven",
    "8" => "Eight",
    "9" => "Nine",
    "10" => "Ten",
);
echo $num_word[$in];
?>  
