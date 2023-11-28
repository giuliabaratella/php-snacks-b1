<!-- php  -->
<?php
$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus odio dolorum labore et, reprehenderit voluptas laudantium nisi modi recusandae quae nemo, vel eligendi sit ad. Illum minima, quibusdam minus perferendis atque qui dignissimos. Provident, culpa corporis saepe officia, similique corrupti distinctio, vero suscipit adipisci fugiat quia cumque. Ipsam, voluptatum mollitia";
$newParagraph = explode(".", $paragraph);
// var_dump($newParagraph);

?>


<!-- html  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <h2>Il tuo testo:</h2>
        <p>
            <?php echo $paragraph ?>
        </p>
        <h2>Il tuo testo diviso in paragrafi:</h2>
        <?php foreach ($newParagraph as $phrase) { ?>
            <p>
                <?php echo "$phrase." ?>
            </p>
        <?php } ?>
    </div>

</body>

</html>