<?php

namespace App\ENUMS;

enum WithdrawTypeEnum: int {

    case ATM = 1;
    case POS = 2;
    case ONLINE = 3;
    case CHEQUE = 4;

}