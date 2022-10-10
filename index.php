<?php
require 'Bicycle.php';

$bike = new Bicycle($color='blue');

var_dump($bike);

echo $bike->getColor();

echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// vehicule// vehicule// vehicule// vehicule

require 'vehicule.php';

// vehicule

$KrustyPorsche = new Car($color='black', $nbSeats=2, $energy='nuclear');

var_dump($KrustyPorsche);

echo 'Numbers of wheels : ' . $KrustyPorsche->getNbWheels() . '<br>';
echo 'The current speed : ' . $KrustyPorsche->getCurrentSpeed() . '<br>';
echo 'Current energy level : ' . $KrustyPorsche->getEnergyLevel() . '%' . '<br>';

// moving vehicule

echo $KrustyPorsche->forward();
echo '<br>Speed of the car : ' . $KrustyPorsche->getCurrentSpeed() . 'km/h' . '<br>';

// stop vehicule

echo $KrustyPorsche->brake();
// echo '<br>Speed of the car : ' . $KrustyPorsche->getCurrentSpeed() . 'km/h' . '<br>';
// echo $KrustyPorsche->brake();

$Homer = new Car($color='Pink', $nbSeats=4, $energy='Beer');

var_dump($Homer);

// echo $Homer->forward();

echo 'Numbers of wheels : ' . $Homer->getNbWheels() . '<br>';