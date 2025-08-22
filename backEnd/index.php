<?php

/* PDO MAN INSTRUCTIONS ....

https://www.php.net/manual/es/pdo.construct.php

*/

use App\Controllers\IncomesController ;
use App\ENUMS\paymentMethodEnum;
use App\ENUMS\IncomeTypeEnum;
    

require ("vendor/autoload.php");

$incomes_controller = new IncomesController();
$incomes_controller->store([
    
    'payment_method' => PaymentMethodEnum::BANK_TRANSFER->value,
    'type' => IncomeTypeEnum::SALARY->value,
    "date" => "2023-10-10",
    'amount' => 1000,
    "description" => "Salary for October"
]);
