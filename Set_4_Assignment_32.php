<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$len = strlen($in);
$count = 1;
for($i=0;$i<$len;$i++){
    if($in[$i]==" ")
    {
        $count += 1;
    }
}
echo $count;
?>