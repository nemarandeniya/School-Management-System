<?php


$con = mysqli_connect("localhost", "root", "1234", "school_management");
if ($_GET['student_id']) {
    $id = $_GET['student_id'];


    $sql = "DELETE FROM user WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    header("location:view_student.php");
}
