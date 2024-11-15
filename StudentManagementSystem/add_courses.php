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

if (isset($_POST['submitvalue'])) {
    $cname = $_POST['name'];
    $cdescription = $_POST['description'];
    $file = $_FILES['image']['name'];
    $dst = "./image/" . $file;
    $dst_db = "image/" . $file;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst);

    $sql = "INSERT INTO course(name,description,image) VALUES('$cname','$cdescription','$dst_db')";
    $result  = mysqli_query($con, $sql);

    if ($result) {
        echo "<script type='text/javascript'>alert('upload succesfully')  </script>";
    } else {
        echo "<script type='text/javascript'>alert('upload failed')  </script>";
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
</head>

<body>
    <?php
    include "admin_sidebar.php";
    ?>
    <center>
        <div class="content">
            <h1>Add Courses</h1><br><br>
            <div class="col-4"> </div>
            <div class="col-8">
                <form action="#" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-4"><label class="form-label text-dark">Name :</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="text" name="name"></div>

                    </div><br>
                    <div class="row">
                        <div class="col-4"><label class="form-label text-dark">Description :</label></div>
                        <div class="col-8"><textarea class="form-control rounded-pill" name="description"></textarea></div>
                    </div><br>
                    <div class="row">
                        <div class="col-4"><label class="form-label text-dark">Image</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="file" name="image"></div>
                    </div><br>

                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6"><button type="submit" class="btn btn-light " name="submitvalue">Submit</button></div>
                        <div class="col-3"></div>

                    </div>
                </form>
            </div>
            <div class="col-4"> </div>
        </div>
    </center>
</body>

</html>