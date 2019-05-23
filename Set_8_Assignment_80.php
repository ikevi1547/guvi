<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
for($i=0;$i<strlen($in);$i++)
    {
        $arrone[$i] = $in[$i]; 
    }
$count_array_size = count($arrone);
for($i=0;$i<$count_array_size;$i++)
    {
        if($arrone[$i]%2!=0)
            {
                echo $arrone[$i]." ";
            }
    }
?>