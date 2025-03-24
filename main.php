<?php


define('MIN_VALUE', '0.0');   // RIGHT - Works OUTSIDE of a class definition.

define('MAX_VALUE', '1.0');   // RIGHT - Works OUTSIDE of a class definition.



//const MIN_VALUE = 0.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.

//const MAX_VALUE = 1.0;         RIGHT - Works both INSIDE and OUTSIDE of a class definition.



class Constants

{

  //define('MIN_VALUE', '0.0');  WRONG - Works OUTSIDE of a class definition.

  //define('MAX_VALUE', '1.0');  WRONG - Works OUTSIDE of a class definition.



  const MIN_VALUE = 0.0;      // RIGHT - Works INSIDE of a class definition.

  const MAX_VALUE = 1.0;      // RIGHT - Works INSIDE of a class definition.



  public static function getMinValue()

  {

    return self::MIN_VALUE;

  }



  public static function getMaxValue()

  {

    return self::MAX_VALUE;

  }

}



$min = Constants::MIN_VALUE;

$max = Constants::MAX_VALUE;


$min = Constants::getMinValue();

$max = Constants::getMaxValue();

echo $max;

echo "\n";

echo __DIR__;

echo "\n";

echo __LINE__;

echo "\n";

//VARIABLES VARIABLES >>>>>

$sugar = "azucar";

$azucar = "sucré";

echo $$sugar;


echo "\n";

?>
