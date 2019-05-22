<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in= fgets($stdin);
while($in)
{
    $output = ($in/2);
    $in = $output;
    if($output>1&&$output<2){
        echo "no";
        break;
    }
    elseif(($output==1)||($output<1)){
        echo "yes";
        break;
    }
}
?>
