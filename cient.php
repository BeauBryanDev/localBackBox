<?php

$cientCall =  curl_init( $argv[1] ) ;

curl_setopt( 

    $cientCall ,
    CURLOPT_RETURNTRANSFER,
    true 
);

$response = curl_exec ( $cientCall ) ;

$httpCode = curl_getinfo( $cientCall ,  CURLINFO_HTTP_CODE );

switch ( $httpCode )  {

    case 200 : 

        echo "It is OK!";
        break;
    
    case 300 : 

        echo "Re-Directing !";
        break;

    case 400 : 

        echo "Wrong Request!";
        break;

    case 500 :

        "Server Failed!";
        break;

    default :

        echo " You ve got it wrong!";
        break;
}
