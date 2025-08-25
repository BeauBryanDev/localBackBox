<?php

namespace App\controllers;

use \DB\PDO\dbConnection as PdoDbConnection;
use PDO;

class WithdrawalsController {

    private $db;

    // public function __construct() {
    //     $this->db = \DB\PDO\dbConnection::getInstance()->get_db_instance();
    // }

    // public function getWithdrawals() {
    //     $query = "SELECT * FROM withdrawals";
    //     $stmt = $this->db->prepare($query);
    //     $stmt->execute();
    //     return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    // }

    public function index()  {

    }

    public function create() {

    }

    public function store($data) {

        $connection = PdoDbConnection::getInstance()->get_db_instance();

        $stmt = $connection->prepare( "INSERT INTO WITHDRAWS (payment_method, type, date, amount, description) VALUES (
            :payment_method,
            :type,
            :date,
            :amount,
            :description
        )");

        $stmt->execute($data);
        $stmt->closeCursor();
    }

    public function show($id) {

        if ($AFFECTED_ROWS > 0) {
            echo "Registro insertado correctamente.";
        } else {
            echo "Error al insertar el registro.";
        }

        echo " Han sido insertados {$AFFECTED_ROWS} registros.";    

    }

    public function edit () {

    }
    public function update($id) {

    }

    public function destroy($id) {

    }


}
