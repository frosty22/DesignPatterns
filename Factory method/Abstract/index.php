<?php

/**
 * Návrhový vzor Factory method slouží k definování rozhraní pro vytváření instancí.
 * Instanční metoda a vlastní tvorbu instací nechává na potomcích objektů.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */

require __DIR__ . "/ICar.php";
require __DIR__ . "/AbstractCarFactory.php";
require __DIR__ . "/AudiCarFactory.php";
require __DIR__ . "/Car.php";


// Vytvoříme instanci konkrétní továrničky
$audiFactory = new \FactoryMethod\AbstractMethod\AudiCarFactory();

// Necháme ji vytvoři instanci našeho již nastaveného objektu
$car = $audiFactory->sellCar();

if ($car instanceof \FactoryMethod\AbstractMethod\Car) {
	echo $car->name . PHP_EOL;					  // vypíše Audi
	echo $car->selled ? "Prodáno" : "Neprodáno";  // vypíše Prodáno
}
