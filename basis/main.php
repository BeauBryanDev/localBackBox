<?php
// Variables del curso
$course = "Curso de PHP";
$price = 29.99; // Variable para el precio
$publication_date = "25 de junio de 2025"; // Variable para la fecha
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course ?></title>
</head>
<body>
    <div class="course-container">
        <h2><?= $course ?></h2>

        <p class="description">
        Aprende a desarrollar aplicaciones web dinámicas con PHP. Desde la instalación del entorno hasta la creación de formularios y gestión de sesiones, construirás una app de registro y login aplicando buenas prácticas. Dominarás la sintaxis básica, el uso de variables, arreglos, funciones y la integración con HTML. Este curso te prepara para avanzar hacia la programación orientada a objetos, bases de datos y APIs.

        </p>

        <div class="info-container">
            <div class="info-item">
                <span class="info-label">Precio</span>
                <span class="price-value">$<?= $price ?></span>
            </div>
            <div class="info-item">
                <span class="info-label">Fecha de Publicación</span>
                <span class="date-value"><?= $publication_date ?></span>
            </div>
        </div>

        <a href="#" class="cta-button">¡Inscríbete Ahora!</a>
    </div>
</body>
</html>

