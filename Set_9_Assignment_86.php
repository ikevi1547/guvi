<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$loop = 0;
while(!feof($stdin))
    {
        $in = trim(fgets($stdin));
        for($i=0;$i<strlen($in);$i++)
            {
                for($j=$i+1;$j<strlen($in);$j++)
                    {
                        if($in[$i]==$in[$j])
                            {
                                $arrone[$loop] = "No";
                                $i = strlen($in);
                                $j = strlen($in);
                            }
                        else
                            {
                                $arrone[$loop] = "Yes";
                            }
                    }
            }
        $loop++;
    }
for($i=0;$i<$loop;$i++)
    {
        echo $arrone[$i];
        if($i!=$loop-1)
            {
                echo "</br>";
            }
    }
?>