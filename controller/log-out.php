<?php
    session_start();
    session_unset();

    session_destroy();
    
    header("Location: ../view/log-in-page.php");
?>