<?php

echo " <h2> Check it Please </h2> <br>";

var_dump($_POST["firstName"]);
echo "\n";
var_dump($_POST["lastName"]);
echo "\n";
var_dump($_POST["userAge"]);
echo "\n";
$iSubmitted = ( isset($_POST["firstName"], $_POST["lastName"], $_POST["userAge"]) 
              && !empty(trim($_POST["firstName"])) 
              && !empty(trim($_POST["lastName"])) 
              && is_numeric($_POST["userAge"]) );
echo "\n";
var_dump($iSubmitted);
echo "<br>";

$userName1 = $_POST["firstName"];
$userName2 = $_POST["lastName"] ;
$userAg3   = $_POST["userAge"] ;

if ( $iSubmitted ) {

    echo "<b> Hello ${userName1} ${userName2} \n How are You Today </b> <br>";

} else {

    echo "<h1><br> You did not fill out the form neither Submit anything <br></h1>";

}

echo "\n";

$texto = "<p>Este es un <strong>texto</strong> con caracteres especiales como & y <.</p>";
$texto_sanitizado = htmlentities($texto);

echo $texto_sanitizado;

echo "\n";

die();

?>
