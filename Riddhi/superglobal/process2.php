<?php

 if(isset($_POST['save'])){

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $pwd = $_REQUEST['password'];
    
    echo "your name is ".$username ."and your email ".$email." and your pwd ". $pwd;

}else{
    echo "no data receive.";
}
?>