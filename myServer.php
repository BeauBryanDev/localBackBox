<?php

/*
$DOG_URL ="https://api.escuelajs.co/api/v1/products";

echo file_get_contents($DOG_URL).PHP_EOL;

*/ 
// AuthToken ...
//header( 'Content-Type : application/json');
//Validate :
if ( !array_key_exists( 'HTTP_X_TOKEN', $_SERVER ) ) {

  http_response_code(  400 );
	die;

}
$url = 'http://localhost:8002';

$curlCall2Server =  curl_init( $url ) ;

curl_setopt( 
  $curlCall2Server ,
  CURLOPT_HTTPHEADER ,
  [
    "X-Token: {$_SERVER['HTTP_X_TOKEN']}"
  ]
  );
curl_setopt(
    $curlCall2Server ,
    CURLOPT_RETURNTRANSFER ,
    true 
  );
$ress = curl_exec( $curlCall2Server );

if ( $ress !==  'true' ) {

  die;
}

$myTinyLibrary = [ 

  'books',
  'authors',
  'magazines',
  'comics',
  'Biographics',
  'Romans',
  'Self-help',
  'Geography-maps',

];

$resourceKind = $_GET['resource_type'];

if ( !in_array( $resourceKind , $myTinyLibrary ) ) {

  die;

}

//Defining the Library Server Resources ...
$books = [
    1 => [
        'titulo' => 'Lo que el viento se llevo',
        'id_autor' => 2,
        'id_genero' => 2,
    ],
    2 => [
        'titulo' => 'La Iliada',
        'id_autor' => 1,
        'id_genero' => 1,
    ],
    3 => [
        'titulo' => 'La Odisea',
        'id_autor' => 1,
        'id_genero' => 1,
    ],
    4 => [
    	'titulo' => 'Hamlet',
    	'id_auto' => 3,
    	'Id_genero' => 4,	
    ],
    [
      'titulo' => 'Los Miserables 5',
      'id_autor' => 7,
      'i_genero' => 9,
      'category' => 'SpanishLiterature',
    ]
    
];

header('Content-Type: application/json');

$resourceID = array_key_exists('resource_id', $_GET) ? $_GET['resource_id'] : '';

switch ( strtoupper( $_SERVER['REQUEST_METHOD']) )  {

  case 'GET' :
    if ( empty( $resourceID ) ) {
    
      echo json_encode( $books ) ;
    
    } else {

      if ( array_key_exists( $resourceID, $books ) ) {

        echo json_encode( $books[ $resourceID ] ) ;

      }

    }     
    
    //echo json_encode($books);
    
    break;
    
  case 'POST' :

    $json = file_get_contents('php://input');

    $books[] = json_decode($json, true ) ;

    echo array_keys( $books )[ count($books) -1 ] ; 
    //Show Books Collection ...
    echo json_encode($books );

    break;
    
  case 'PUT' : 
    //validate the searching resource does exists ....
    if ( !empty($resourceID) && array_key_exists( $resourceID, $books ) )  {
      //take raw inputs ...
      $json = file_get_contents('php://input');

      //transforom received JSON into a new Element ....
      $books[ $resourceID ] = json_decode( $json , true );
      //resolve and return edicted collection as JSON ....
      echo json_encode( $books );
    } 
      
    break;
    
  case 'DELETE':
    //Validate if Resource Exists ....
    if ( !empty($resourceID) && array_key_exists( $resourceID, $books ) )  {
      //Delete an Specific ResourceID ....
      unset( $books[ $resourceID ] );

    }
    echo json_encode( $books );

    break;
    
    

}





