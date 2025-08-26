<?php

namespace App\controllers;
use App\ENUMS\PaymentMethodEnum;
use App\ENUMS\IncomeTypeEnum;
use App\ENUMS\WithdrawTypeEnum;

use \DB\PDO\dbConnection as PdoDbConnection;
use PDO;

class WithdrawalsController {

    private $db;

    public function __construct() {
        $this->db = PdoDbConnection::getInstance()->get_db_instance();
    }

    // public function getWithdrawals() {
    //     $query = "SELECT * FROM withdrawals";
    //     $stmt = $this->db->prepare($query);
    //     $stmt->execute();
    //     return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    // }

    public function index()  {

        $stmt = $this->db->prepare("SELECT * FROM WITHDRAWS");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        //var_dump($result);
        //return $result;

        foreach ($result as $row) {

             // Convert the integer to the enum case and get its name
            $typeName = WithdrawTypeEnum::from($row['type'])->name;

            //echo "ID: " . $row['id'] . "<br>";
            echo "Método de Pago: " . $row['payment_method'] . "<br> \n";
            echo "Tipo: " . $typeName . "<br> \n";
            echo "Fecha: " . $row['date'] . "<br> \n";
            echo "Cantidad: $" . $row['amount'] . "<br> \n";
            echo "Descripción: " . $row['description'] . "<br> \n";
            echo "<hr>\n";
        }

        $rsltWithFetchCol = $stmt->fetchAll(\PDO::FETCH_COLUMN);

        foreach ($rsltWithFetchCol as $value) {
            echo $value . "\n";
        }   

        $stmt = $this->db->prepare("SELECT amount, description FROM WITHDRAWS");
        $stmt->execute();

        $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);

        foreach ($results as $result) {
            echo "Gastaste $result USD \n"; 
        }


    }

    public function create() {
        // Mostrar el formulario para crear un nuevo retiro
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

        $stmt->bindValue(':payment_method', $data['payment_method']);
        $stmt->bindValue(':type', $data['type']);
        $stmt->bindValue(':date', $data['date']);
        $stmt->bindValue(':amount', $data['amount']);
        $stmt->bindValue(':description', $data['description']);

        $stmt->execute($data);
        $stmt->closeCursor();
    }

    public function show($id) {

        $stmt = $this->db->prepare("SELECT * FROM WITHDRAWS WHERE UID = :id");
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $typeName = WithdrawTypeEnum::from($row['type'])->name;

            echo "ID: " . $row['UID'] . "<br> \n";
            echo "Método de Pago: " . $row['payment_method'] . "<br> \n";
            echo "Tipo: " . $typeName . "<br> \n";
            echo "Fecha: " . $row['date'] . "<br> \n";
            echo "Cantidad: $ " . $row['amount'] . "<br> \n";
            echo "Descripción: " . $row['description'] . "<br> \n";
            echo "<hr>\n";
        } else {
            echo "No se encontró el retiro con ID: $id . \n";
        }

        $stmt->closeCursor();

    }

    public function edit () {

    }
    public function update($id) {

    }

    public function destroy($id) {

    }


}
