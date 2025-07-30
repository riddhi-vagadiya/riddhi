<?php
    session_start();

    print_r($_SESSION);

    if(isset($_SESSION['username'])){
        echo $_SESSION['username'].'already set';

        if(isset($_SESSION['email'])){
            echo $_SESSION['email'].'already set';

            if(isset($_SESSION['password'])){
                echo $_SESSION['password'].'already set';

                if(isset($_SESSION['contact'])){
                    echo $_SESSION['contact'].'already set';
                }
            }
        }else{
            echo "no session set.";
        }
    }



?>