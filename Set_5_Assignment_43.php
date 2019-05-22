<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$len = strlen($in);
for($i=0;$i<$len;$i++)
{
    if($in[$i]!=" ")
    {
        $arrone .= $in[$i];
    }
}
echo $arrone;
?>