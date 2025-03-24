<?php 

class Automobile {

    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model) {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel() {
        return $this->vehicleMake.' - '.$this->vehicleModel;
    }
}


class AutomobileFactory {

    private static $model;

    public static function create($make) {
        self::$model = date('Y');
        return new Automobile($make, self::$model);
    }
}

$renault = new Automobile("Renault", 2019);
$toyota = AutomobileFactory::create("Toyota");


echo $renault->getMakeAndModel().PHP_EOL;
echo $toyota->getMakeAndModel().PHP_EOL;


