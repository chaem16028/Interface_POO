<?php


require_once 'LightableInterface.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

$car=new Car('blue',5,'fuel');
$bike= new Bicycle('vert',1);
$skate=new Skateboard('bleu',0);


$bike->setCurrentSpeed(15);
echo "valeur de switchOn bike";
var_dump($bike->switchOn());
echo "valeur de switchOff bike";
var_dump($bike->switchOff());



echo '<br>';
echo '<br>';
echo "valeur de switchOn car";
var_dump($car->switchOn());

echo "valeur de switchOff car";
var_dump($car->switchOff());