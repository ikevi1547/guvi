<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$dum_loop = 0; 
while(!feof($stdin))
    {
        $get_array_in[$dum_loop] = fgets($stdin);
        $dum_loop++;
    }
$dum_loop = 0;
for($i=0;$i<strlen($get_array_in[0]);$i++)
    {
        if($get_array_in[0][$i]!=" ")
            {
                $arrone[$dum_loop] .= trim($get_array_in[0][$i]);
            }
        elseif($get_array_in[0][$i]==" ")
            {
                $dum_loop++;
            }
    }
$N = $arrone[0];
$K = $arrone[1];
$dum_loop = 0;
for($i=0;$i<strlen($get_array_in[1]);$i++)
    {
        if($get_array_in[1][$i]!=" ")
            {
                $arrtwo[$dum_loop] .= trim($get_array_in[1][$i]);
            }
        elseif($get_array_in[1][$i]==" ")
            {
                $dum_loop++;
            }
    }
$count = 0;
for($i=0;$i<$N;$i++)
    {
        if($arrtwo[$i]==$K)
            {
                $count += 1;
            }
    }
echo $count;
?>  