<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$alphabetics = array('a','e','i','o','u','b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
for($i=0;$i<strlen($in);$i++)
    {
        if(!in_array(strtolower($in[$i]),$alphabetics))
            {
                echo $in[$i];
            }
    }
