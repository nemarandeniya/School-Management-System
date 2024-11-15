<?php


$con = mysqli_connect("localhost", "root", "1234", "school_management");
if ($_GET['course_id']) {
    $id = $_GET['course_id'];


    $sql = "DELETE FROM course WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    header("location:view_courses.php");
}
