<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = strtolower(fgets($stdin));
$len = strlen($in);
$count = 0;
$alphabetics_numeric = array('a','e','i','o','u','b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
for($i=0;$i<$len;$i++){
    if($in[$i]!=" "){
    if(!in_array($in[$i],$alphabetics_numeric))
    {
        $count += 1;
    }
}
}
echo $count;
?>
