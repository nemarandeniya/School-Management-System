<?php
session_start();
$host = "localhost";
$user = "root";
$pw = "1234";
$db = "school_management";

error_reporting(0);



$con = mysqli_connect($host, $user, $pw, $db);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '" . $name . "' AND password = '" . $password . "' ";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "student") {
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = "student";
        header("location:studenthome.php");
    } elseif ($row["usertype"] == "admin") {
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = "admin";
        header("location:adminhome.php");
        exit;
    } else {

        // echo "username or password donot match";
        $message = "username or password don't match";
        $_SESSION['loginMessage'] = $message;
        header("location:login.php");
    }
}
