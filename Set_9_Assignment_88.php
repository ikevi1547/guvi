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
    if ($a == $b) 
        return $a; 
    
        if ($a > $b) 
        return gcd($a - $b, $b); 
    return gcd($a, $b - $a); 
}
function lcm( $a, $b) 
{ 
    return ($a * $b) / gcd($a, $b); 
}  
echo lcm($arrone[0],$arrone[1]);
?>