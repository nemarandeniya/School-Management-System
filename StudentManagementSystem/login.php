<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2/css/all.css">
    <title>login form</title>
</head>

<body>
    <center>
        <div class="formDesign">
            <center class="login">
                <h2>Login</h2>

                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                    echo $_SESSION['loginMessage'];
                    ?>
                </h4>
            </center>


            <form action="checklogin.php" method="POST">
                <div class="input-box">

                    <div class="txtusername"><label>Username :</label>
                        <input type="text" name="username" class="input">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="txtpassword"><label>Password :</label>
                        <input type="password" name="password" class="input">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                </div>
                <!-- <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password</a>
                </div> -->
                <div>
                    <input type="submit" name="submit" value="Login" class="submit ">

                </div>
                <div class="reg-link">
                    <p>Don't have an account?<a href="register.php">Register</a></p>
                </div>

            </form>
        </div>
    </center>
</body>

</html>