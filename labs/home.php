<?php
session_start();
$title = "Home";
require_once 'includes/header.php';
?>
<style>
     hr {
        border: 0;
        height: 4px;
        background-color: black;
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
<hr>
<body>
    <?php if (!isset($_SESSION['email'])): ?>
        <div style="text-align: center; margin-top: 15%; font-family: consolas;   backdrop-filter: blur(10px); border: 1px solid white; border-radius: 4px;">
            <h1 style="color: white; font-size: 2.5em;">Please login to access the content here</h1>
            <p style="color: white; font-size: 1.5em;">Redirecting to login page...</p>
        </div>
        <script>
            setTimeout(function(){
                window.location.href = 'loginform.php';
            }, 1000); 
        </script>
    <?php else: ?>
        <div style="text-align: center; margin-top: 10%; font-family: consolas;   backdrop-filter: blur(10px); border: 1px solid white; border-radius: 4px;">
            <h1 style="color: white; font-size: 2.5em;">~ Welcome to Algoma University ~</h1>
            <p style="color: white; font-size: 1.5em; padding: 30px;">School of Computer Science</p>
            <?php
                echo "<p style='color: white; font-size: 1.2em;'>" . date("l, F j, Y") . "</p>";
            ?>
        </div>
    <?php endif; ?>
</body>
<?php include 'includes/footer.php';?>