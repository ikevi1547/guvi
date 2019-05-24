<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$dum = 0;
while(!feof($stdin))
    {
        $in[$dum] = fgets($stdin);
        $dum++;
    }
$dum = 0;
for($i=0;$i<strlen($in[0]);$i++)
    {
        if($in[0][$i]!=" ")
            {
                $arrone[$dum] .= $in[0][$i];
            }
        elseif($in[0][$i]==" ")
            {
                $dum++;
            }
    }
$odd_loop = trim($arrone[1]);
$dum = 0;
for($i=0;$i<strlen($in[1]);$i++)
    {
        if($in[1][$i]!=" ")
            {
                $arr[$dum] .= $in[1][$i];
            }
        elseif($in[1][$i]==" ")
            {
                    $dum++;
            }
    }
    for($i=0;$i<trim($arrone[0]);$i++)
        {
            if($arr[$i]%2!=0)
                    {
                        $odd_loop--;
                        if($odd_loop==0)
                            {
                                echo $arr[$i];
                            }
                    }
        }
?>