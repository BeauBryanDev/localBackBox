<?php

$outside_variable = "Esto es una variable global";

function my_function() {

    global $outside_variable;

    echo $GLOBALS["outside_variable"];

}

echo $outside_variable;
echo "\n";

my_function();

echo "\n";

echo $outside_variable;

echo "\n";


$variable = "edad";
$$variable = 14;
echo $edad;

function bark() {
    return "woof!";
    }
    
$function = "bark";
echo $function();



?>


