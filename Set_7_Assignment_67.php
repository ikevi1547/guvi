    
<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
while($in)
    {
        if($in%10==0)
            {
                echo $in;
                break;
            }
        $in++;
    }
?>