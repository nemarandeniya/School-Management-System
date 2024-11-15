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
$sql = "SELECT * FROM course";
$result = mysqli_query($con, $sql);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>
    <?php
    include "admin_sidebar.php";
    ?>
    <center>
        <div class="content">

            <h1>View Courses</h1>
            <table class="table table-bordered table-hover">
                <thead class=" table-dark">
                    <tr>
                        <th style="padding: 10px;">Name</th>
                        <th style="padding: 10px;">Description</th>
                        <th style="padding: 10px;">Image</th>
                        <th style="padding: 10px;">Delete</th>
                        <th style="padding: 10px;">Update</th>


                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        # code...

                    ?>
                        <tr>
                            <td style="padding: 10px;"><?php echo "{$row['name']}" ?></td>
                            <td style="padding: 10px;"><?php echo "{$row['description']}" ?></td>
                            <td style="padding: 10px;"><img height="100px" width="100px" src="<?php echo "{$row['image']}" ?>"> </td>
                            <td style="padding: 10px;"><?php echo "<a style='color: red;' href='delete_course.php?course_id={$row['id']}'><center><i class='fa-solid fa-trash'></i></center></a>"; ?></td>
                            <td style="padding: 10px;"><?php echo "<a style='color: red;' href='update_course.php?course_id={$row['id']}'><center><i class='fa-solid fa-pen-to-square'></i></center></a>" ?></td>


                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </center>
</body>

</html>