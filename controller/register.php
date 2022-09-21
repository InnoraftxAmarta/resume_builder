<?php
    if(isset($_POST["registerbutton"]))
    {
        include "../model/register-new-user.php";
        $obj = new resume();
        $obj->connect();
        $user = $_POST["username"];
        $password = $_POST["password"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $data1 = $obj->regData($fname,$lname,$user,$password);
        
        echo "<script>alert('$data1'); window.location = '../view/log-in-page.php'</script>";
    }
    

?>