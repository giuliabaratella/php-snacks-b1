<!-- php  -->
<?php
$matches = [
    [
        'team_home' => 'CLEVELAND CAVALIERS',
        'team_away' => 'GOLDEN STATE WARRIORS',
        'goals_home' => '62',
        'goals_away' => '75'
    ],
    [
        'team_home' => 'LOS ANGELES LAKERS',
        'team_away' => 'MILWAUKEE BUCKS',
        'goals_home' => '83',
        'goals_away' => '68'
    ],
    [
        'team_home' => 'TORONTO RAPTORS',
        'team_away' => 'SAN ANTONIO SPURS',
        'goals_home' => '91',
        'goals_away' => '87'
    ],
];
$background = "img/basket.jpg";

?>


<!-- html  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1 class="text-uppercase text-center py-2">NBA Basket</h1>
    </header>
    <main class="container">

        <div class="mb-5" id="matches">
            <div class="d-flex align-items-baseline ">
                <h2 class="text-uppercase pe-2">News</h2>
                <h6>Snack 1</h6>
            </div>
            <!-- snack 1  -->
            <div class="news-card d-flex">
                <img src="https://basketinside.com/wp-content/uploads/2020/05/top100_feature.jpg" class="w-50"
                    alt="basket">
                <div class="w-50 text">
                    <h3 class="mb-4">Partite della settimana</h3>
                    <?php foreach ($matches as $match) { ?>
                        <div class="card-text">
                            <?php echo "{$match['team_home']} - {$match['team_away']} | {$match['goals_home']} - {$match['goals_away']} " ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
        <div class="mb-5 p-3" id="form">
            <!-- form snack 2  -->
            <div class="d-flex align-items-baseline">
                <h2 class="pe-2">Accedi</h2>
                <h6>Snack 2</h6>
            </div>
            <form action="snack2.php" method="GET">
                <div class="row">
                    <div class="col-8 mb-3">
                        <label for="name" class="form-label">Inserisci il tuo nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-4 mb-3">
                        <label for="age" class="form-label">Inserisci la tua età</label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
        <div class="my-5" id="bonus">
            <button class="btn my-5"><a href="bonus.php">Vai al bonus</a></button>

        </div>
    </main>

</body>

</html>