<?php
error_reporting(0);
$stdin = fopen('php://stdin', 'r');
$in = fgets($stdin);
$type_in =  is_numeric($in);
class NumberSign
    {
        public $Input;
        public $type_var;
        function __construct($get_Num = 0,$type = 0){
            $this->Input = $get_Num;
            $this->type_var = $type;
        }
        function ValidateSign(){
        	if($this->type_var==1){
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
        	else{
        		echo "Invalid Input";
        	}
        }
    }
$output = new NumberSign($in,$type_in);
$output->ValidateSign();
?>