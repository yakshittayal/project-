<?php
session_start(); 

require_once 'includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT email, password FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $dbemail, $dbpassword);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($dbpassword && password_verify($password, $dbpassword)) {
        $_SESSION['email'] = $dbemail;
        header("Location: actualsolutions.php");
        exit(); 
    } else {
        echo '<div style="text-align: center; color: white; font-size: 50px; text-decoration: underline; margin-top: 10%;">wrong password, try Again</div>';
        echo '<div style="text-align: center; color: white; font-size: 20px; margin-top: 10px;">You will be redirected in 4 seconds...</div>';
        echo '<script>
                setTimeout(function() {
                    window.location.href = "loginform.php";
                }, 4000);
              </script>';
    }
}
?>