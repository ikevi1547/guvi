    <?php
    error_reporting(0);
    $stdin = fopen('php://stdin', 'r');
    $in = fgets($stdin);
    $loop = 1;
    while($loop){
        $temp = $in*$loop;
        $loop++;
        $output .= $temp;
        $output .= " ";
        if($loop==6){
            break;
        }
    }
    echo $output;
    ?> 