<?php
session_start();
$random_password = $_SESSION['random_password'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Password</title>
</head>

<body>
    <div class="container">
        <div class="alert alert-success mt-3">
            La password generata è "<strong> <?= $random_password ?></strong>"
        </div>
    </div>
</body>

</html>