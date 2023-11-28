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
</head>

<body>
    <div class="container">
        <div class="my-5">
            <!-- snack 1  -->
            <h1>Partite della stagione</h1>
            <h5>Snack 1</h5>
            <?php foreach ($matches as $match) { ?>
                <div>
                    <?php echo "{$match['team_home']} - {$match['team_away']} | {$match['goals_home']} - {$match['goals_away']} " ?>
                </div>
            <?php } ?>
        </div>
        <div>
            <!-- form snack 2  -->
            <h2>Accedi</h2>
            <h5>Snack 2</h5>
            <form action="snack2.php" method="GET">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="name" class="form-label">Inserisci il tuo nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-6 mb-3">
                        <label for="age" class="form-label">Inserisci la tua età</label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>