<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$len = strlen($in);
$count = 0;
$number_array = array("0","1","2","3","4","5","6","7","8","9");
for($i=0;$i<$len;$i++){
    if(in_array($in[$i],$number_array))
    {
        $count += 1;
    }
}
echo $count;
?>