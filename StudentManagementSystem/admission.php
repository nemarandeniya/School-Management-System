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
$sql = "SELECT * FROM registration";

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
</head>

<body>
    <?php
    include "admin_sidebar.php";
    ?>

    <div class="content">
        <center>
            <h1>Admission List</h1>
        </center><br><br>


        <table class="table table-bordered table-hover">
            <thead class=" table-dark">
                <tr>
                    <th style="padding: 10px;">Name</th>
                    <th style="padding: 10px;">Email</th>
                    <th style="padding: 10px;">Mobile</th>
                    <th style="padding: 10px;">Message</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    # code...

                ?>
                    <tr>
                        <td style="padding: 10px;"><?php echo "{$row['name']}" ?></td>
                        <td style="padding: 10px;"><?php echo "{$row['email']}" ?></td>
                        <td style="padding: 10px;"><?php echo "{$row['mobile']}" ?></td>
                        <td style="padding: 10px;"><?php echo "{$row['message']}" ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>