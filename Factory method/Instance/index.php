<?php

/**
 * Návrhový vzor Factory method slouží k definování rozhraní pro vytváření instancí.
 * Instanční metoda se používá nejčastěji v případech konstantních tříd, tj. tříd u kterých
 * po vytvoření instance nelze jejich stav měnit (parametry přijímají v konstruktoru).
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */

require __DIR__ . "/Product.php";

// Vytvoříme instanci objektu Product
$product = new \FactoryMethod\InstanceMethod\Product("foo", "bar");

// Vytvoříme další instanci s rozdílným parametrem Foo
$product2 = $product->setFoo("baz");

// Ověříme si naši teorii
if ($product !== $product2) {
	echo "Máme dvě instance objektů s rozdílnými parametry" . PHP_EOL;
	echo $product->test() . PHP_EOL;  // Vrátí "foo - bar"
	echo $product2->test() . PHP_EOL; // Vrátí "baz - bar"
}
