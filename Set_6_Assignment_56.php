<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in= fgets($stdin);
$alpha = true;
$num = true;
$alphabetics = array('a','e','i','o','u','b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
$numbers = array("1","2","3","4","5","6","7","8","9","0");
for($i=0;$i<strlen($in);$i++){
    if(in_array(strtolower($in[$i]),$alphabetics)){
        $alpha = true;
        break;
    }
    else{
        $alpha = false;
    }
}
for($i=0;$i<strlen($in);$i++){
    if(in_array($in[$i],$numbers)){
        $num = true;
        break;
    }
    else{
        $num = false;
    }
}
if($alpha&&$num){
    echo "Yes";
}
else{
    echo "No";
}
?>  