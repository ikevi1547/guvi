<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$dum = 0;
for($i=0;$i<strlen($in);$i++)
    {
        if($in[$i]!==" ")
            {
                $arrone[$dum] .= $in[$i];
            }
        elseif($in[$i]==" ")
            {
                $dum++;
            }
    }
$prod_of_two_num = (float) ($arrone[0]*$arrone[1]);
$int_val = (int) $prod_of_two_num;
$out = (float) $prod_of_two_num-$int_val;
$final_print = $int_val + 0.00000;
$out += $final_print;
echo round($out,5);
?>
