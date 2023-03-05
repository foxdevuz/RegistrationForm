<?php
    require "./backend/db.php";

    // login user
    if(isset($_POST['password']) && isset($_POST['email'])){
        $email = real_string($_POST['email']);
        $password = real_string($_POST['password']);

        // make password to md5
        $password = md5($password);

        // check database for email and pasword 
        $slt = "SELECT * FROM users WHERE email = '{$email}' and pass = '{$password}'";
        $query = mysqli_query($conn, $slt);
        if(mysqli_num_rows($query)>0){
            // account exist redirect user with js code or header("Location: |url|);
            echo "<script>alert('Accound found redirect user to some page')</script>";
        } else {
            echo "<script>alert('Accound not found')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== Iconscout CSS ===== -->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./css/style.css">

        <title>Login & Registration Form</title>
    </head>

    <body>

        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Login</span>

                    <form action="./index.php" method="POST">
                        <div class="input-field">
                            <input type="text" name="email" placeholder="Enter your email" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" class="password" placeholder="Enter your password" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Remember me</label>
                            </div>

                            <a href="#" class="text">Forgot password?</a>
                        </div>

                        <div class="input-field button">
                            <input type="submit" value="Login">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text signup-link">Signup Now</a>
                        </span>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="form signup">
                    <span class="title">Registration</span>

                    <form action="#">
                        <div class="input-field">
                            <input type="text" placeholder="Enter your name" required>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" required>
                            <i class="uil uil-envelope icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Create a password" required>
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Confirm a password" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="termCon">
                                <label for="termCon" class="text">I accepted all terms and conditions</label>
                            </div>
                        </div>

                        <div class="input-field button">
                            <input type="button" value="Signup">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Already a member?
                            <a href="#" class="text login-link">Login Now</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <script src="./js/script.js"></script>

    </body>

</html>
