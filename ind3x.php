<?php

setcookie(
    name: "header_color",
    value: "#12373d"
);

$color = $_COOKIE["header_color"] ?? "#121f3d";

//$color = isset($_COOKIE['header_color']) ? $_COOKIE['header_color'] : ""

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Platzi</title>
</head>
<body>

    <header
        style="
            background: <?= $color ?>
        "
    >
        <img src="./platziIcon.webp" alt="Platzi">
    </header>
    
</body>
</html>