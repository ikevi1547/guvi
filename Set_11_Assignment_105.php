<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
for($i=0;$i<strlen($in);$i++)
    {
        if($in[$i]!=" ")
            {
                $arrone .= $in[$i];
            }
    }
echo $arrone;
?>