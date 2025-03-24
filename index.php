<?php


date_default_timezone_set("America/Mexico_City");

$now = new DateTime();
echo $now->format("d-M-Y    h:i a");
echo "\n";
echo strtotime($now->format("Y-m-d H:i:s"));


echo "\n";


$today = new DateTime();

$VenusDOB  = new DateTime("2019-07-16");

echo "\n" . $VenusDOB->format("Y-m-d") . "\n" ;
$timefromVenusArrival =  $VenusDOB->diff($today);
//diff devyelve un DateInterval Object , Iuse PROPERTY ->format() ...

echo $timefromVenusArrival->format("%y-%m-%d ");
echo "\n";
echo $VenusDOB->diff($today)->format("tiene %y años - %m meses - #d dias"); 


echo "\n";


