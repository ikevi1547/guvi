<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$vowel = array("a","e","i","o","u");
for($i=0;$i<strlen($in);$i++)
    {
        if(in_array($in[$i],$vowel))
            {
                $flag = true;
                break;
            }
        else
            {
                $flag = false;
            }
    }
if(!$flag)
    {
        echo "no";
    }
else    
    {
        echo "yes";
    }
?>