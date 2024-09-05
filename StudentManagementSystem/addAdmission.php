<?php

$host = "localhost";
$user = "root";
$pw = "1234";
$db = "school_management";

$con = mysqli_connect($host, $user, $pw, $db);






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admission</title>

    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style type="text/css">
        .inputForm {
            background-color: rgb(113, 121, 126);
            padding: 20px;
            margin: 60px;
            border-radius: 50px;
        }

        .submitbtn {
            background-color: white;
            color: black;
        }

        .submitbtn:hover {
            background-color: rgb(255, 95, 21);
            color: white;
        }

        .admissionInput {
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <header class="header">
        <center>
            <h1 class="text-light dashboard">Admission</h1>
        </center>

    </header>

    <div class="inputForm bg-secondary text-light">
        <center>
            <div class="col-4"> </div>
            <div class="col-8 admissionInput">
                <form action="checkdata.php" method="post">

                    <div class="row">
                        <div class="col-4"><label class="form-label text-light">Name</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="text" name="inputname"></div>

                    </div><br>
                    <div class="row">
                        <div class="col-4"><label class="form-label text-light">Email</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="text" name="inputemail"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-4"><label class="form-label text-light">Mobile</label></div>
                        <div class="col-8"><input class="form-control rounded-pill" type="text" name="inputmobile"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-4"><label class="form-label text-light">Message</label></div>
                        <div class="col-8"><textarea class="form-control rounded-pill" name="inputmessage"></textarea></div>


                    </div><br>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6"><button type="submit" class="btn submitbtn" name="submitvalue">Submit</button></div>
                        <div class="col-3"></div>

                    </div>
                </form>
            </div>
            <div class="col-4"> </div>
        </center>
</body>

</html>