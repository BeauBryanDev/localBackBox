<?php

// En la ruta ~/backEnd/app/Controllers/IncomesController.php
namespace App\Controllers;

use DB\PDO\dbConnection as PdoDbConnection;
use PDO;

class IncomesController {

    private PDO $db;

    // Se inyecta la dependencia de conexión en el constructor
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function index() {

        //$this->db->prepare( "SELECT * FROM INCOMES");
        $stmt = $this->db->prepare( "SELECT * FROM INCOMES");
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $row) {
            echo "ID: " . $row['MID'] . "<br> \n";
            echo "Método de Pago: " . $row['payment_method'] . "<br> \n";
            echo "Tipo: " . $row['type'] . "<br> \n";
            echo "Fecha: " . $row['date'] . "<br> \n";
            echo "Cantidad: $ " . $row['amount'] . "<br> \n";
            echo "Descripción: " . $row['description'] . "<br> \n";
            echo "<hr>\n";
        }
        //index by using common fetch while loop

        while ( $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['MID'] . "<br> \n";
            echo "Método de Pago: " . $row['payment_method'] . "<br> \n";
            echo "Tipo: " . $row['type'] . "<br> \n";
            echo "Fecha: " . $row['date'] . "<br> \n";
            echo "Cantidad: $ " . $row['amount'] . "<br> \n";
            echo "Descripción: " . $row['description'] . "<br> \n";
            echo "<hr>\n";
        }
    }

    public function store(array $data): void {
        $query = "INSERT INTO INCOMES (payment_method, type, date, amount, description) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([
            $data['payment_method'],
            $data['type'],
            $data['date'],
            $data['amount'],
            $data['description'],
        ]);
    }

    public function create() {

    }

    public function show($id) {

    }

    public function edit () {

    }
    public function update($id) {

    }

    public function destroy($id) {

    }

}

    

