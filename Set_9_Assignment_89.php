<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = trim(fgets($stdin));
for($i=0;$i<strlen($in);$i++){
    for($j=$i+1;$j<strlen($in);$j++)
    {
        if($in[$i]>$in[$j])
        {
            $temp = $in[$j];
            $in[$j] = $in[$i];
            $in[$i] = $temp;
        }
    }
}
echo $in;
