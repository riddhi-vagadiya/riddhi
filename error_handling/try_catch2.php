<?php
try{
$a = 40;
if($a <= 40){
    echo $a . "big";
}else{
    echo $a . "not big";
}
}catch(Exception $e){
    echo $e->getMessage();
}

?>