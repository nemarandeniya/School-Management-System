<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location:login.php");
} elseif ($_SESSION['usertype'] == "student") {
    header("location:login.php");
}




$host = "localhost";
$user = "root";
$pw = "1234";
$db = "school_management";

$con = mysqli_connect($host, $user, $pw, $db);
$id = $_GET['student_id'];

$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($con, $sql);
$row = $result->fetch_assoc();


if (isset($_POST['updatevalue'])) {
    $name = $_POST['inputname'];
    $email = $_POST['inputemail'];
    $mobile = $_POST['inputmobile'];
    $password = $_POST['inputpassword'];

    $sql2 = "UPDATE user SET username='$name',mobile='$mobile',email='$email',password='$password' WHERE id='$id'";
    $result2 = mysqli_query($con, $sql2);

    if ($result2) {
        echo "<script type='text/javascript'>alert('update successfully')</script>";
    } else {
        echo "<script type='text/javascript'>alert('update failed')</script>";
    }
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style type="text/css">
        .inputForm {
            background-color: rgb(113, 121, 126);
            padding: 20px;
            margin: 60px;
        }

        .submitbtn {
            background-color: white;
            color: black;
        }

        .submitbtn:hover {
            background-color: rgb(255, 95, 21);
            color: wheat;
        }
    </style>
</head>

<body>
    <?php
    include "admin_sidebar.php";
    ?>

    <div class="inputForm bg-secondary">
        <center>
            <h1>Update Student</h1><br><br>


            <div class="col-4"> </div>
            <div class="col-8">
                <form action="#" method="post">

                    <div class="row">
                        <div class="col-4"><label class="form-label text-dark">Username</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="text" name="inputname" value="<?php echo "{$row['username']}" ?>"></div>

                    </div><br>
                    <div class="row">
                        <div class="col-4"><label class="form-label text-dark">Email</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="text" name="inputemail" value="<?php echo "{$row['email']}" ?>"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-4"><label class="form-label text-dark">Mobile</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="text" name="inputmobile" value="<?php echo "{$row['mobile']}" ?>"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-4"><label class="form-label text-dark">Password</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="text" name="inputpassword" value="<?php echo "{$row['password']}" ?>"></div>


                    </div><br>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6"><button type="submit" class="btn submitbtn " name="updatevalue">Update</button></div>
                        <div class="col-3"></div>

                    </div>
                </form>
            </div>
            <div class="col-4"> </div>
    </div>
    </center>
</body>

</html>