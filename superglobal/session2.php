<?php

session_start();

print_r($_SESSION);

if(isset($_SESSION['username'])){
    echo $_SESSION['username'].'is already set.';
    if(isset($_SESSION['email'])){
        echo $_SESSION['email'].'set.';
    }elsE{
        echo "no session set";
    }
}

?>