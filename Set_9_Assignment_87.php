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
function gcd($a, $b) 
{ 
    if($b==0) 
        return $a ; 
  
    return gcd( $b , $a % $b ) ; 
} 
echo gcd($arrone[0],$arrone[1]);
?>