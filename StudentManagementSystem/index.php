<?php

error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>alert('$message')</script>";
}


$host = "localhost";
$user = "root";
$pw = "1234";
$db = "school_management";

$con = mysqli_connect($host, $user, $pw, $db);
$sql = "SELECT * FROM teacher";
$result = mysqli_query($con, $sql);

$sql2 = "SELECT * FROM course";
$result2 = mysqli_query($con, $sql2);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <style>
        .logo {
            font-size: 25px;
            position: relative;
            left: 5%;
            color: rgb(255, 255, 255);
            font-weight: bold;
            line-height: 70px;
        }

        .nav-link {
            color: rgb(255, 95, 21)
        }

        .nav-link:hover {
            color: rgb(255, 95, 21);
        }

        .welcome_img {
            width: 100%;
            height: 250px;
            border-radius: 10px;
        }

        footer {
            background-color: rgb(255, 95, 21);
            height: 30px;
            width: 100%;
        }

        .footer_txt {
            text-align: center;
            color: aliceblue;
            top: 20%;
            position: relative;
        }
    </style>
</head>

<body>

    <!-- <nav>
        <label class="logo">NE-School</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="addAdmission.php">Admision</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav> -->
    <nav class="bg-light">
        <label class="logo" style="color: rgb(255, 95, 21);">NE-School</label>

        <ul class="nav justify-content-center d-flex">
            <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addAdmission.php">Admision</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_txt">We teach Student with care</label>
        <img src="pics/school.png" class="main_img">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="pics/school1.avif" class="welcome_img">
            </div>
            <div class="col-8">
                <h1>Welcome to NE-School</h1>
                <p>Lorem ipsum dolor sit amet
                    consectetur adipisicing elit.
                    Deleniti dolorum pariatur laboriosam
                    laudantium quos exercitationem magni
                    iure esse culpa ad, inventore voluptate,
                    ipsam illum neque ab nemo ratione, rem obcaecati?</p>
            </div>
        </div>

        <center>
            <h1>Our Teachers</h1>
        </center>

        <div class="container">
            <div class="row">

                <?php

                while ($info = $result->fetch_assoc()) {
                    # code...

                ?>
                    <div class="col-4">
                        <img height="200px" width="200px" style="border-radius: 20px;" src="<?php echo "{$info['image']}" ?>">
                        <h3><?php echo "{$info['name']}" ?></h3>
                        <h5><?php echo "{$info['description']}" ?></h5>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!-- border-radius: 20px;border: 1px solid black; -->
        <center>
            <h1>Our Courses</h1>
        </center>

        <div class="container">
            <div class="row">

                <?php

                while ($info2 = $result2->fetch_assoc()) {
                ?>
                    <div class="col-4">
                        <img height="200px" width="200px" style="border-radius: 20px;" src="<?php echo "{$info2['image']}" ?>">
                        <h3><?php echo "{$info2['name']}" ?></h3>
                        <h5><?php echo "{$info2['description']}" ?></h5>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>




    </div>
    <footer>
        <h5 class="footer_txt">All @copyright reserver by NE tech Knowledge</h5>
    </footer>
</body>

</html>