<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php 
// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
//  che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e 
//  che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
//   altrimenti “Accesso negato”

// Data
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

echo ("<h2>Name: " . $name . "</h2>"); 
echo ("<h2>Email: " . $mail . "</h2>");
echo ("<h2>Age: " . $age . "</h2>");

// Controll
if((strlen($name) > 3) && (strpos($mail, "@") && strpos($mail, ".")) && is_numeric($age)){
    echo ("Access granted");
}
else{
    echo ("Access denied");
}

?>