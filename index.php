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
    <title>Snack1</title>
</head>

<body>
    <h1>Snack 1</h1>
    <h2>Partite della stagione</h2>
    <?php foreach ($matches as $match) { ?>
        <div>
            <?php echo "{$match['team_home']} - {$match['team_away']} | {$match['goals_home']} - {$match['goals_away']} " ?>
        </div>
    <?php } ?>

</body>

</html>