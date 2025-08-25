<?php

// $server = "localhost";
// $database = "SELF-SPENDINGS";
// $username = "dbkeeper";
// $password = "Set.Fire.tothe.Rain*528+";


// $connection = new PDO("mysql:host=$server;dbname=$database", $username,$password ) ;

// $setnames = $connection->prepare("SET NAMES 'utf8'") ;
// $setnames->execute() ;

// var_dump($setnames ) ;


/*
try {
        
    $connenction = new PDO("mysql:host=$server; dbname=$database", $username, $password);
    $connenction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $setnames = $connenction->prepare("SET NAMES utf8");
    $setnames->execute();

} catch (Exception $e) {

    die ("Ha ocurrido un error en la línea " . $e->getLine() . "<br>" . $e->getMessage());

} finally {

    $connenction = NULL;

}
*/
namespace DB\PDO;

class dbConnection {

    private static $instance;
    private $connection;

    private function __construct() {
        $this->set_connection();
    }

    public static function getInstance(): self {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function get_db_instance(): \PDO {
        return $this->connection;
    }

    private function set_connection(): void {
        $server = "localhost";
        $database = "SELF-SPENDINGS";
        $username = "dbkeeper";
        $password = "Set.Fire.tothe.Rain*528+";

        try {
            $this->connection = new \PDO("mysql:host=$server;dbname=$database;charset=utf8", $username, $password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

        } catch (\PDOException $e) {
            // Un mensaje más útil para depuración en desarrollo
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
}

