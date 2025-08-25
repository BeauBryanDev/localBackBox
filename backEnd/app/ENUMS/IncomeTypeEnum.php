<?php

namespace App\ENUMS;

enum  IncomeTypeEnum : int {

    case SALARY = 1;
    case BUSINESS = 2;
    case INVESTMENT = 3;
    case SAVINGS = 4;
    case REFUND = 5;

}