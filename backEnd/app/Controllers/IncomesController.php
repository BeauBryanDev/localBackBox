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

        $stmt = $this->db->prepare("SELECT * FROM INCOMES WHERE MID = :id");
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            echo "ID: " . $result['MID'] . "<br> \n";
            echo "Método de Pago: " . $result['payment_method'] . "<br> \n";
            echo "Tipo: " . $result['type'] . "<br> \n";
            echo "Fecha: " . $result['date'] . "<br> \n";
            echo "Cantidad: $ " . $result['amount'] . "<br> \n";
            echo "Descripción: " . $result['description'] . "<br> \n";
        } else {
            echo "No se encontró el ingreso con ID: $id";
        }
    }

    public function edit () {

    }
    public function update($data, $id) {

        $stmt = $this->db->prepare("UPDATE INCOMES SET payment_method = :payment_method, type = :type, date = :date, amount = :amount, description = :description WHERE MID = :id");    

        $stmt->execute([
            'payment_method' => $data['payment_method'],
            'type' => $data['type'],
            'date' => $data['date'],
            'amount' => $data['amount'],
            'description' => $data['description'],
            'MID' => $id
        ]);

    }

    public function destroy($id) {

        $this->db->beginTransaction();

        try {
            $stmt = $this->db->prepare("DELETE FROM INCOMES WHERE MID = :id");
            $stmt->execute(['id' => $id]);

            $areYouSure = readLine("Are You Sure You want to delete this data row $id ? [ yes/no ]");

            if (strtolower($areYouSure) !== 'yes') {
                throw new \Exception("Deletion cancelled by user.\n");
            } 
            else {

                $this->db->commit();
                echo "Eliminado exitoso!.\n";

            }
            
        } catch (\Exception $e) {
            $this->db->rollBack();
            echo "Error al eliminar el ingreso: \n" . $e->getMessage();
        }
    }

}

    

