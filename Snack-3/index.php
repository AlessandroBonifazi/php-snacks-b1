<?php 
// Snack 3
// Creare un array con 15 numeri casuali, tenendo conto 
// che l’array non dovrà contenere lo stesso numero più di una volta

// Data 
$randomNumbers = [];

while(count($randomNumbers) < 15) {
    $randomNum = rand(1, 100);

    if (!in_array(($randomNum), $randomNumbers)) {
        $randomNumbers[] = $randomNum;
    }
}
echo('<pre>');
var_dump($randomNumbers);
echo('</pre>');
?>