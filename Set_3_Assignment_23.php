<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$i = 0 ;
while(! feof($stdin))  {
    $result[$i] = fgets($stdin);
    $i++;
  }
$inp = $result[1];
$len = strlen($inp);
$j = 0;
for($i=0;$i<$len;$i++){
    if($inp[$i]!=" "){
        $in[$j] .= $inp[$i];
    }
    elseif($inp[$i]==" "){
        $j++;
    }
}
$len = count($in);
$n=0;
for ($i=0;$i<$len;$i++){
    for($j=$i+1;$j<$len;$j++){
    if($in[$j-1]=="-"){
    	$in[$j-1] = 0;
    	$neg[$n] = $in[$j];
    	$in[$j] = 0;
    	$n++;
    	break;
    }
     elseif($in[0]>$in[$j]){
           $temp_data = $in[$j];
           $in[$j] = $in[$i];
           $in[0] = $temp_data;
       }
    }
}
if($in[0]==0){
	$len = count($neg);
	for ($i=0;$i<$len;$i++){
    for($j=$i+1;$j<$len;$j++){
    	if($neg[0]<$neg[$j]){
           $temp_data = $neg[$j];
           $neg[$j] = $neg[$i];
           $neg[$i] = $temp_data;
    	}
    }
	}
	echo 0-$neg[0];
}
else {
echo $in[0];
}
?>