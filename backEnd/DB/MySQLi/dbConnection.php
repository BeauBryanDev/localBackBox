<?php 

namespace DB\MySQLi ;

class dbConnection {

    private static $instance ;
    private $connection ;

    private function __construct( Type $var = null   ) {

        $this->set_connection();
    }

    public static function getInstance()  {

        if ( !self::$instance instanceof self  ) 

            self::$instance = new self() ;

        return self::$instance ; 

    }

    public function get_db_instance()  {

        return $this->connection ;
    }

    private function set_connection() {

        $server = "localhost";
        $database = "SELF-SPENDINGS";
        $username = "dbkeeper";
        $password = "Set.Fire.tothe.Rain*528+";


        $mysqli = new mysqli( $server, $username, $password, $database ) ;
        ///OOP WAY FORM ....

        if ( $mysqli->connect_errno ) 
            die("MySQLi Connection FAILED : { $mysqli->connect_error }" );


        $setnames = $mysqli->prepare("SET NAMES 'utf8'");
        $setnames->execute();

        var_dump($setnames) ;

        $this->connection = $mysqli ;

    }

}






