<?php
require_once 'CarFactoryInterface.php';
require_once 'CarInterface.php';
require_once 'SedanFactory.php';
require_once 'Sedan.php';



/* Client */

$factory = new SedanFactory();
$car = $factory->makeCar();
print $car->getType();