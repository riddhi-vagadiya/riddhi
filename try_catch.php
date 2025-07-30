<?php 
// error_reporting(0);


function printName($param){
    if(is_numeric($param) == false){
        echo $param ." is my name.";    
    }else{
        throw new Exception("We have reveived number from your input.");
    }

}

try{
    echo printName(1545);
}catch(Exception ){
    echo $e->getMessage();
}


// try{
//     // $a = 15;
//     // if($a > 15){
//     //     echo $a." is bigger.";
//     // }else{
//     //     echo $a." is not bigger.";
//     // }

//     $conn = mysqli_connect("localhost","root","","gamezones");

// }catch(Exception $e){
//     echo $e->getMessage();
// }



?>