<!-- php  -->
<?php
$name = $_GET["name"];
$age = $_GET["age"];
$email = $_GET["email"];
// echo $name . $age . $email;
// var_dump(strlen($name) > 3);
// var_dump(str_contains($email, "@"));
// var_dump(str_contains($email, "."));
// var_dump(is_numeric($age));



?>


<!-- html  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container">
        <h3 class="my-5 p-2" id="access">
            <?php
            if ((strlen($name) > 3) && (str_contains($email, "@")) && (str_contains($email, ".")) && (is_numeric($age))) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
            ?>
        </h3>

        <button class="btn btn-home"><a href="index.php">Torna alla home</a></button>

    </div>
</body>

</html>