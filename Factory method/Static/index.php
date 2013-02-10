<?php

/**
 * Návrhový vzor Factory method slouží k definování rozhraní pro vytváření instancí.
 * Statická tovární metoda může být použita v případě, že předáme všechny parametry
 * jako argumenty metodě.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */

require __DIR__ . "/Foo.php";
require __DIR__ . "/ProductFactory.php";

// Nyní vytvoříme instanci objektu pomocí naší továrničky
$product = FactoryMethod\StaticMethod\ProductFactory::create("foo");
if ($product instanceof FactoryMethod\StaticMethod\Foo) {
	echo "Nyní máme instanci Foo vytvořenou pomocí továrničky";
}
