<?php


$con = mysqli_connect("localhost", "root", "1234", "school_management");
if ($_GET['teacher_id']) {
    $id = $_GET['teacher_id'];


    $sql = "DELETE FROM teacher WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    header("location:view_teacher.php");
}
