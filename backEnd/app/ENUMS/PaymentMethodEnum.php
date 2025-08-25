<?php

namespace App\ENUMS;

enum PaymentMethodEnum: int {

    case CREDIT_CARD = 1;
    case DEBIT_CARD = 2;
    case PAYPAL = 3;
    case BANK_TRANSFER = 4;
    case SALARY = 5;

}

