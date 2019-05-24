<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$dum = 0;
while(!feof($stdin))
    {
        $in[$dum] = trim(fgets($stdin));
        $dum++;
    }
$count = count($in);
for($i=0;$i<$count;$i++)
    {
        $loop = 1;
        while($loop)
            {
                if($in[$i]%2==0)
                    {
                        $in[$i] = $in[$i]/2;
                    }
                else
                    {
                        $loop = 0; 
                    }
            }
    }
for($i=0;$i<$count;$i++)
    {
        echo $in[$i];
        if($i!=$count-1)
            {
                echo "</br>";
            }
    }
?>