<?php

/**
 * Návrhový vzor Builder odděluje konstrukci složitých objektů od jejich
 * reprezentace, čímž možné použít stejný proces konstrukce pro různé reprezentace.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */

require __DIR__ . "/Book.php";
require __DIR__ . "/BookDirector.php";
require __DIR__ . "/BookBuilder.php";
require __DIR__ . "/MysqlBookBuilder.php";
require __DIR__ . "/PhpBookBuilder.php";

// Vytvoříme si instanci řídího procesu.
$bookDirector = new \Builder\BookDirector();

// Předáme stavitele mysql.
$bookDirector->setBookBuilder(new \Builder\MysqlBookBuilder());

// Zkonstruujeme knihu.
$bookDirector->constructBook();

// Získáme objekt.
$mysql = $bookDirector->getBook();

// Zkontrolujeme a vypíšeme data.
if ($mysql instanceof \Builder\Book) {
	echo $mysql->test();	// Vypíše "Mysql - Database layer"
}

// Předáme stavitele php.
$bookDirector->setBookBuilder(new \Builder\PhpBookBuilder());

// Zkonstruujeme knihu.
$bookDirector->constructBook();

// Získáme objekt.
$php = $bookDirector->getBook();

// Zkontrolujeme a vypíšeme data.
if ($php instanceof \Builder\Book) {
	echo $php->test();	// Vypíše "PHP - Hypertext PreProcesor"
}
