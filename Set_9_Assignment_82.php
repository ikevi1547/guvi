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
$get_length = strlen($int_val)+6;
$out = (float) $prod_of_two_num-$int_val;
$final_print = $int_val + 0.000001;
$out += $final_print;
echo substr($out,0,$get_length);
?>