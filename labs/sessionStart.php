<?php
    session_start();
    $_SESSION["email"] = 'pluto@gmail.com';
    if(isset($_SESSION['user_name'])){
        echo $_SESSION['user_name'];
    }
?>