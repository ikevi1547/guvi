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
$N = $arrone[0];
$Root = $arrone[1];
while($Root)
    {
        if($Root!=1)
        {
        $N *= $arrone[0];
        }
        $Root--;
    }
echo $N;
?>