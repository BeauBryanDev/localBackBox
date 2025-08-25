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
        // Implementación de getIncomes aquí
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

    

