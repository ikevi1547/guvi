<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$flag = false;
for($i = 2; $i <= $in/2; ++$i)
        {
            if($in % $i == 0)
            {
                $flag = true;
                break;
            }
        }
if(!$flag){
    echo "yes";
}
else{
    echo "no";
}
?>
