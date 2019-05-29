<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$numeric_values = array(0,1,2,3,4,5,6,7,8,9);
for($i=0;$i<strlen($in);$i++)
    {
        if(!ctype_alpha(trim($in[$i])))
            {
                echo $in[$i];
            }
    }