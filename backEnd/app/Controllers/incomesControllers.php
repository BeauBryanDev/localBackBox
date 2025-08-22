<?php

namespace App\Controllers;

use DB\MySQLi\dbConnection;

class IncomesController {

    private $db;

    public function __construct() {
        $this->db = dbConnection::getInstance()->get_db_instance();
    }

    // public function getIncomes() {
    //     $query = "SELECT * FROM incomes";
    //     $stmt = $this->db->prepare($query);
    //     $stmt->execute();
    //     return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    // }

    public function index()  {

    }

    public function create() {

    }

    public function store($data) {


        $connection = $this->db;

        $query = "INSERT INTO INCOMES ( payment_method, type, date, amount, description) VALUES (?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($query);
        $stmt->execute([
            $data['payment_method'],
            $data['type'],
            $data['date'],
            $data['amount'],
            $data['description'],
        ]);
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
