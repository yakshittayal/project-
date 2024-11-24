<?php 
session_start();
session_unset(); 
session_destroy();

$title = "Log out ";
require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged Out</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            text-align: center;
            margin-top: 15%;
            backdrop-filter: blur(10px);
            color: white;
            border: 1px solid white;
            border-width: 5px;
            border-radius: 4px;
            padding: 20px; 
        }
        .btn-primary {
            margin-top: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>You are Logged Out</h1>
        <a href="./loginform.php" class="btn btn-primary">Login again</a>
    </div>
</body>
</html>
<?php include 'includes/footer.php'; ?>
