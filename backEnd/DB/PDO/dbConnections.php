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

    private static object $instance;
    private $connection;

    private function __construct() {

        $this->set_connection();
    }

    public static function getInstance() {

        if (!self::$instance instanceof self)

            self::$instance = new self();

        return self::$instance;

    }

    public function get_db_instance() {

        return $this->connection;
    }

    private function set_connection() {

        $server = "localhost";
        $database = "SELF-SPENDINGS";
        $username = "dbkeeper";
        $password = "Set.Fire.tothe.Rain*528+";

        try {
            $this->connection = new \PDO("mysql:host=$server;dbname=$database", $username, $password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $setnames = $this->connection->prepare("SET NAMES 'utf8'");
            $setnames->execute();

            //var_dump($setnames);

        } catch (\Exception $e) {
            die("Ha ocurrido un error en la línea " . $e->getLine() . "<br>" . $e->getMessage());
        }
    }

}
