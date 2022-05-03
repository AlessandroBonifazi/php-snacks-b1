<?php 
// Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
// Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

// Data
$gamesOfTheDay = [
    [
        'homeTeam' => 'Miami Heat',
        'awayTeam' => 'Philadelphia 76ers',
        'homePoints' => '106',
        'awayPoints' => '92',
    ],
    [
        'homeTeam' => 'Boston Celtics',
        'awayTeam' => 'Mlwaukee Bucks',
        'homePoints' => '89',
        'awayPoints' => '101',
    ],
    [
        'homeTeam' => 'Golden State Warriors',
        'awayTeam' => 'Memphis Grizzlies',
        'homePoints' => '117',
        'awayPoints' => '116',
    ],
    [
        'homeTeam' => 'Phoenix Suns',
        'awayTeam' => 'New Orleans Pelicans',
        'homePoints' => '115',
        'awayPoints' => '109',
    ],
];

// Methods
for($i = 0; $i < count($gamesOfTheDay); $i++) {
    echo('<h2>' . 'Game: ' . ($i+1) . '</h2>');

    $game = $gamesOfTheDay[$i];
    echo('<h3>' . $game['homeTeam'] . ' - ' . $game['awayTeam'] . '</h3>');
    echo('<h4>' . $game['homePoints'] . ' - ' . $game['awayPoints'] . '</h4>');

}
?>