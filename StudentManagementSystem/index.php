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
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <nav>
        <label class="logo">NE-School</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="addAdmission.php">Admision</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
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
                        <img src="<?php echo "{$info['image']}" ?>">
                        <h3><?php echo "{$info['name']}" ?></h3>
                        <h5><?php echo "{$info['description']}" ?></h5>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>

        <center>
            <h1>Our Courses</h1>
        </center>

        <div class="container">
            <div class="row">

                <div class="col-4">
                    <img src="pics/web.jpg" class="teacher">
                    <p>Web Development
                    </p>
                </div>
                <div class="col-4">
                    <img src="pics/dsa.png" class="teacher">
                    <p>Data Structures & Algorithms
                    </p>
                </div>
                <div class="col-4">
                    <img src="pics/marketing.avif" class="teacher">
                    <p>Marketing
                    </p>
                </div>
            </div>
        </div>




    </div>
    <footer>
        <h5 class="footer_txt">All @copyright reserver by NE tech Knowledge</h5>
    </footer>
</body>

</html>