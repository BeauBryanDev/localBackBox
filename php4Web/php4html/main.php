<?php

$UserName = $_GET["uName"];
$UserAge  = $_GET["uAge"];

//printext.php_check_syntax

echo "User Name : $UserName \nUser Age is : $UserAge , Thanks You for sharing your name with us .\n";

$baseName = $_FILES["FileImage"]["name"];
echo "<br>";
echo $baseName;

$MyImage = $_FILES["FileImage"]["tmp_name"];

$uploadRoute = "./pictures/$baseName";

move_uploaded_file($MyImage, $uploadRoute );

echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .my1Image {
            width: 500px;
            height: 400px;
            border-radious :25%; 
            
        }
    </style>
</head>
<body>
    <img class="my1Image" src= "<?= $uploadRoute ?>" alt="Chosen User Picture <?php $baseName ?>" >
</body>
</html>