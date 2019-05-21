<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$first = 0;
$second = 1;
for ($i = 1; $i <= $in; $i++)
{
  if($i <= 1){
    $output = $i;
  }
  else
  {
    $output = $first + $second;
    $first = $second;
    $second = $output;
  }
  echo $output;
  echo " ";
}
?>
