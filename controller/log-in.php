<?php
    if(isset($_POST["signin"]))
    {
        include "../model/register-new-user.php";
        $obj = new resume();
        $obj->connect();
        $user = $_POST["uname"];
        $password = $_POST["pass"];
        $data1=$obj->checkData($user);
        if($password == $data1[0]['password']){
            session_start();
            $_SESSION['user'] = "$user";
            $_SESSION['pass'] = "$password";
            header("Location:../view/home.php");
    
        }
        else {
            echo "<script>alert('Userid password does not match');
            window.location = '../view/log-in-page.php';</script>";
        }
        
    }
?>