<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$type_in =  ctype_digit($in);
class EvenOrOdd
    {
        public $Input;
        public $type_var;
        function __construct($get_Num = 0,$type = 0){
            $this->Input = $get_Num;
            $this->type_var = $type;
        }
        function Validate(){
        	if($this->type_var==1){
                $temp_data = $this->Input;
                if($temp_data%2==0){
                    echo "Even";
                }
                else{
                    echo "Odd";
                }
        	}
        	else{
        		echo "invalid";
        	}
        }
    }
$output = new EvenOrOdd($in,$type_in);
$output->Validate();
?>
