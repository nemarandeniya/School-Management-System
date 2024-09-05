<?php
session_start();
$host = "localhost";
$user = "root";
$pw = "1234";
$db = "school_management";


$con = mysqli_connect($host, $user, $pw, $db);

if (!$con) {
    die("Connection Error..!");
}

if (isset($_POST['submitvalue'])) {
    $name = $_POST['inputname'];
    $email = $_POST['inputemail'];
    $mobile = $_POST['inputmobile'];
    $message = $_POST['inputmessage'];

    $sql = "INSERT INTO registration(name,email,mobile,message) VALUES('$name','$email','$mobile','$message')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "<script>alert('successfully applied')</script>";

        $_SESSION['message'] = "successfully applied";
        header("location:index.php");
    }
} else {
    echo "<script>alert('apply failed')</script>";
}
