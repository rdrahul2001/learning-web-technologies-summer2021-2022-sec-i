<?php

session_start();

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username = $_REQUEST['username'];
    echo $username;
    $password = $_REQUEST['password'];
    echo $password;
    $email = $_REQUEST['email'];
    echo $email;
    $gender= $_REQUEST['gender'];
    echo $gender;



    if($email==null && $gender==null){
        echo "Invalid input";
    }
    else if{
        $_SESSION['username']==$username;
        header('location:NewHome.php');
    }

    
        
    
    else{
        echo "invalid user";
    }


}

?>