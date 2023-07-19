<?php

$user_length = $_GET['length'] ?? '';

include('./includes/functions.php');

$random_password = getRandomString($user_length);

if ($user_length) {
    session_start();
    $_SESSION['random_password'] = $random_password;
    header('location: password.php');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Password Generetor</title>
</head>

<body>

    <div class="container">


        <h1 class="text-center mb-5">STRONG PASSWORD GENERETOR</h1>
        <form action="#">

            <div class="mb-3 w-25">
                <label for="number" class="form-label">Inserisci la lunghezza della password:</label>
                <input type="number" class="form-control" id="number" name="length" min="1" max="100">

            </div>
            <button type="submit" class="btn btn-primary">Invia</button>

        </form>


    </div>


</body>

</html>