<?php
$title = "Signup";
require_once 'includes/header.php' ?>
<style>
    .form-label {
        color: white;
        font-size: 19px;
        font-weight: bold;
        text-decoration:underline;       
    }
    body {
        backdrop-filter: blur(10px);
    }
    .container{
        
    height: 450px; 
    overflow-y: scroll; 

    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="receive.php" class="row g-3">
                    <div class="col-md-6">
                        <label for="inputFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="inputFirstName" name="first_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="inputLastName" name="last_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputUsername" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="inputUsername" name="username" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="inputConfirmPassword" name="confirm_password" required>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Province</label>
                        <select id="inputState" name="province" class="form-select" required>
                            <option selected>Choose...</option>
                            <option>Alberta</option>
                            <option>British Columbia</option>
                            <option>Manitoba</option>
                            <option>New Brunswick</option>
                            <option>Newfoundland</option>
                            <option>Ontario</option>
                            <option>Quebec</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputPostalCode" class="form-label">area Code</label>
                        <input type="text" class="form-control" id="inputPostalCode" name="area_code" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.bundle.js"></script>
    <script src="./js/checkpassword.js"></script>
</body>
<?php include 'includes/footer.php'; ?>