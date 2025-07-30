<?php 
// error_reporting(0);


function printName($param){
    if(is_numeric($param) == true){
        echo $param ." is my name.";    
    }else{
        throw new Exception("We have reveived number from your input.");
    }

}

try{
    echo printName($param);
}catch(Exception $e){
    echo $e->getMessage();
}

?>