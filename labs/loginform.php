<?php
$title = "Login";
require_once 'includes/header.php';
?>
<style>
    body {
        color: white;
        text-decoration: underline;
        font-weight: bold;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        backdrop-filter: blur(10px);
    }
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    .form-content {
        width: 100%;
        max-width: 400px; 
    }
    .form-control {
        width: 100%; 
    }
    .form-label h4 {
        margin-bottom: 0;
    }
</style>
<body>
    <div class="form-container">
        <div class="form-content">
            <form method="POST" action="login.php" class="row g-3">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label"><h4>Email</h4></label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" required>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword" class="form-label"><h4>Password</h4></label>
                    <input type="password" class="form-control" id="inputPassword" name="password" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.js"></script>
</body>
<?php include 'includes/footer.php'; ?>
