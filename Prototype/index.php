<?php

/**
 * Návrhový vzor Prototype určuje způsoby jak vytvářet objekty pomocí prototypů,
 * které se při tvorbě nové instance naklonují.
 *
 * Tento návrhový vzor se namísto Factory method používá v případech, kdy je
 * tvorba instance náročná a využití klonování je jednodušší.
 *
 * Implementace prototype v PHP je v podstatě pouze klon existující instance,
 * s tím, že je nutné objekt uzpůsobit pro klonování. Objekty, které obsahují
 * reference na další objekty se při klonování tyto reference pouze zkopírují,
 * tzv. mělká kopie. V případě, že u objektu je vyžadováno, aby objekty na niž
 * instance ukazuje byly též naklonovány, jedná se o hlubokou kopii.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */

require __DIR__ . "/Bar.php";
require __DIR__ . "/Foo.php";

// Vytvoření instance objektu
$foo = new \Prototype\Foo();

// Složité nastavení stavu objektu
$foo->bar = new \Prototype\Bar();

// Vytvořen klonu objektu
$foo2 = clone $foo;

// Ověření klonu
if ($foo !== $foo2) {
	echo "Jedná se o klon." . PHP_EOL;
	if ($foo->bar !== $foo2->bar) {
		echo "Jedná se o hluboký klon." . PHP_EOL;
	}
}

