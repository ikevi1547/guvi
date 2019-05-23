<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$dum = 0;
while(!feof($stdin))
    {
        $in[$dum] = fgets($stdin);
        $dum++;
    }
$N = trim($in[0]);
$dum = 0;
for($i=0;$i<strlen($in[1]);$i++)
    {
        if($in[1][$i]!=" ")
            {
                $arrone[$dum] .= $in[1][$i];
            }
        elseif($in[1][$i]==" ")
            {
                $dum++;
            }
    }
$L = trim($arrone[0]);
$R = trim($arrone[1]);
if($L<$N&&$R>$N)
    {
        echo "yes";
    }
else    
    {
        echo "no";
    }

?>