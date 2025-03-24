<?php

$time = time();

echo  "Time : $time".PHP_EOL."Hash: ".sha1($argv[1].$time .'y_secrect007').PHP_EOL;


// 
// if ( !array_key_exists( 'HTTP_X_HASH', $_SERVER) || !array_key_exists('HTTP_X_TIMESTAMP', $_SERVER ) || 
//       !array_key_exists( 'HTTP_X_UID' , $_SERVER )  )  {

//         die ; 
//   }

// list( $hash,  $uid, $timestamp ) = [

//   $_SERVER['HTTP_X_HASH'],
//   $_SERVER['HTTP_X_UID'],
//   $_SERVER['HTTP_X_TIMESTAMP'],

// ];

// $secret = 'my_secrect007';

// $myHash = sha1( $uid.$timestamp.$secret );

// if (  $myHash !== $hash ) {
  
//   die;
// }

