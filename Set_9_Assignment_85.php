<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = trim(fgets($stdin));
for($i=0;$i<strlen($in);$i++)
    {
        if(($i+1)%2!=0)
            {
                $arrone .= $in[$i];
            }
        else
            {
                $arrtwo .= $in[$i];
            }
    }
echo $arrone." ".$arrtwo;
?>