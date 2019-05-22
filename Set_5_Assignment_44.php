<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
if($in<=10&&$in>=1)
{
    echo "yes";
}
else
{
    echo "no";
}
?>