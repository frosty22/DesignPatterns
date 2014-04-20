<?php

/**
 * Návrhový vzor Crate nebo-li přepravka je nejjednodušší možný návrhový vzor
 * což pravděpodovně důvod proč se nedostal mezi "oficiální" návrhové
 * vzory GoF.
 *
 * Jedná se o návrhový vzor sloužící k sjednocení souvisejících dat,
 * minoritně z důvodu využití jako návratové hodnoty. Jelikož je možné
 * v návratových hodnotách vracet pouze jednu entitu (skalární proměnnou, pole, objekt)
 * je možné vytvořit triviální objekt sloužící jako přepravka.
 *
 * Jelikož mám rád příklady z reálného programování, využil jsem v příkladu
 * přepravku pro odpověď ze serveru, kde bychom chtěli pomocí služby zíkat
 * obsah URL + status webu. Modelovým příkladem bývají pozice X,Y.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */

require_once __DIR__ . "/Downloader.php";
require_once __DIR__ . "/Response.php";

// Příklad objektu, jehož metoda vrací přepravku
$downloader = new Downloader();

// Zavoláme metodu, která vrací přepravku
$response = $downloader->fetch("http://www.neco.cz");

// Můžeme získat data z přepravku
// namísto nějakého associativního pole, známe API
// objektu Response takže je nám jasné kde co hledat
echo $response->getContent();
echo $response->getStatus();

