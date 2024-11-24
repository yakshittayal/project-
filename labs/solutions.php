<?php
session_start();
$title = "AlgomaU";
require_once 'includes/header.php'; 
if (isset($_SESSION['email'])) {
    
    header("Location: actualsolutions.php");
    exit();
}
?>
<body>
    <div style="text-align: center; margin-top: 10%; backdrop-filter: blur(10px); border: 1px solid white; border-radius: 4px;">
        <h1 style="color: white; font-size: 2.5em;">To view course material</h1>
        <button type="button" class="btn btn-outline-primary" onclick="window.location.href='loginform.php';" style="margin: 5px;">Login</button>
        <button type="button" class="btn btn-outline-primary" onclick="window.location.href='signup.php';" style="margin: 5px;">Sign Up</button>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
