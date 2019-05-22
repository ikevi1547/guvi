<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
for($i=0;$i<strlen($in);$i++)
    {
        if($in[$i]==1||$in[$i]==0)
            {
                $binary_flag = true;
            }
        else
            {
                $binary_flag = false;
                break;
            }
    }
if($binary_flag)
    {
        echo "yes";
    }
else
    {
        echo "no";
    }

?>