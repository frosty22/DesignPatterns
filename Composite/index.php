<?php

/**
 * Návrhový vzor Composite slouží ke spojení více objektů do jednoho,
 * který se poté jeví z pohledu API jako pouze jeden objekt.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */

require __DIR__ . "/ILogger.php";
require __DIR__ . "/EmailLogger.php";
require __DIR__ . "/FileLogger.php";
require __DIR__ . "/CompositeLogger.php";

// Vytvoříme instanci našeho Composite loggeru
$logger = new CompositeLogger();

// Předáme instanci email logger
$logger->addLogger(new EmailLogger());

// Předáme instanci file loggeru
$logger->addLogger(new FileLogger());

// Pro test zavoláme metodu "log"
$logger->log('test');

/**
 * Díky implementaci stejného rozhraní můžeme nahrazovat jednotlivé
 * loggery EmailLogger, FileLogger, a zároveň díky vzoru Composite
 * je i spojit dohromady a volat současně.
 *
 * Tímto způsobem lze spojovat libovolné třídy implementující nějaká rozhraní
 * dohromady.
 *
 */