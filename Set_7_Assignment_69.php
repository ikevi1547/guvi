<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$dum = 0;
for($i=0;$i<strlen($in);$i++)
    {
        if($in[$i]!=" ")
            {
                $arrone[$dum] .= $in[$i];
            }
        elseif($in[$i]==" ")
            {
                $dum++;
            }
    }
$get_num_to_check = abs(abs($arrone[0]) - abs($arrone[1]));
if($get_num_to_check%2==0)
    {
        echo "even";
    }
else
    {
        echo "odd";
    }
?>