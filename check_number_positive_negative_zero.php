<!-- Template HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project 1</title>
</head>
<body>
    <center>
        <form method="POST" action="">
        <input type="text" placeholder="Enter a Number" name="NUM"/>
        <input type="submit" name="SignValue" value="Click Here to Find the Number sign"/>
        </form>
    </center>
</body>
</html>

<!-- Logic PHP -->
<?php
error_reporting(0);
class NumberSign
    {
        public $Input;
        function __construct($get_Num = 0){
            $this->Input = $get_Num;
        }
        function ValidateSign(){
            if($this->Input>0){
                echo "Positive";
            }
            if($this->Input<0){
                echo "Negative";
            }
            if($this->Input==0){
                echo "Zero";
            }
        }
    }

if (isset($_POST['SignValue'])){
    $output = new NumberSign($_POST['NUM']);
    echo "<center>";
    echo "<h4>OUTPUT</h4>";
    $output->ValidateSign();
    echo "</center>";
}
