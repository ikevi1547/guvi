<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$dum = 0;
for($i=0;$i<strlen($in);$i++)
    {
        if($in[$i]!=" ")
            {
                $arrone .= $in[$i];
            }
        elseif($in[$i]==" ")
            {
                $dum++;
            }
    }
$input = $arrone[0]*$arrone[1];
$sqr_num = (int) (sqrt($input));
if(($sqr_num*$sqr_num)==$input)
    {
        echo "yes";
    }
else
    {
        echo "no";
    }
?>
