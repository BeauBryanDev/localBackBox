<?php

/* PDO MAN INSTRUCTIONS ....
https://www.php.net/manual/es/pdo.construct.php

*/

// En la ruta ~/backEnd/index.php
// Esto es un ejemplo, se debe usar un enrutador en un proyecto real
require __DIR__ . "/vendor/autoload.php";

use App\Controllers\IncomesController;
use DB\PDO\dbConnection;
use App\ENUMS\PaymentMethodEnum;
use App\ENUMS\IncomeTypeEnum;

try {
    // 1. Obtener la instancia de la conexión a la base de datos
    $db = dbConnection::getInstance()->get_db_instance();

    // 2. Crear una instancia del controlador, inyectando la dependencia
    $incomes_controller = new IncomesController($db);

    // 3. Llamar al método store
    $incomes_controller->store([
        'payment_method' => PaymentMethodEnum::BANK_TRANSFER->value,
        'type' => IncomeTypeEnum::SALARY->value,
        "date" => "2023-10-10",
        'amount' => 1000,
        "description" => "Salary for October"
    ]);

    echo "Datos insertados correctamente en la base de datos.";

} catch (\Exception $e) {
    echo "Ha ocurrido un error al procesar la solicitud: " . $e->getMessage();
}


