<?php

/**
 * Návrhový vzor Singleton zajišťuje existenci pouze jedné instance dané třídy.
 *
 * Používá se tedy právě v případě, kdy potřebujete zaručit, že ve Vaší aplikaci
 * bude existovat pouze jedna instance.
 *
 * Tento návrhový vzor můžete v praxi potkat nejčastěji ve spojení s objektem
 * zajišťující připojení do databáze, avšak tento vzor není ideální pro používání,
 * neboť sami nikdy nemůžete určit, zda opravdu bude vždy jedna instance.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */

require __DIR__ . "/Connection.php";

// Zkusíme vytvořit instanci ale dostaneme chybu:
// Fatal error: Call to protected Singleton\Connection::__construct() from invalid context
//$connection = new Singleton\Connection();

// Získáme instanci objektu
$connection = \Singleton\Connection::getInstance();
if ($connection instanceof \Singleton\Connection) {
	echo "Máme instanci objektu." . PHP_EOL;
}

// Získáme instanci objektu znou a porovnáme
$connection2 = \Singleton\Connection::getInstance();
if ($connection === $connection2) {
	echo "Obě instance jsou identické." . PHP_EOL;
}

// Zkusíme klonovat objekt, ale dostaneme chybu:
// Fatal error: Call to protected Singleton\Connection::__clone() from context
//$connection3 = clone $connection;