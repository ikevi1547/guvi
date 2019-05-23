<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$check_prime_numbers = $in;
$flag = false;
    for($loop=2;$loop<=$check_prime_numbers/2; ++$loop)
    {
        if($check_prime_numbers % $loop == 0){
            $flag = true;
        }
    }
    if($flag){
        echo "yes";
    }
    else{
        echo "no";
    }
?>