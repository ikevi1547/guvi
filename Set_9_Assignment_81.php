<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$end_loop = 0;
while(!feof($stdin))
    {
        $in = fgets($stdin);
        $inp_loop = 0;
        for($i=0;$i<strlen($in);$i++)
            {
                if($in[$i]!=" ")
                    {
                        $arrone[$end_loop][$inp_loop] .= $in[$i];
                    }
                elseif($in[$i]==" ")
                    {
                        $inp_loop++;
                    }
            }
        $end_loop++;
    }
$get_line_count = count($arrone);
for($i=0;$i<$get_line_count;$i++)
    {
        echo abs(abs($arrone[$i][0]) - abs($arrone[$i][1]));
        echo "</br>";
    }
?>