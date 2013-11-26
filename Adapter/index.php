<?php

/**
 *
 * Návrhový vzor Adapter slouží ke přizpůsobení rozhraní třídy,
 * k požadovanému nekompatibilnímu rozhraní.
 *
 * V praxi využijeme například při stažení knihovny, kterou chceme
 * implementovat, ale třídá má neočekávané rozhraní.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */

require __DIR__ . "/IReader.php";
require __DIR__ . "/CsvReader.php";
require __DIR__ . "/AnyXmlReader.php";
require __DIR__ . "/XmlAdapter.php";


// Příklad již existujícího readeru, který má požadované rozhraní IReader
$reader = new CsvReader();
$reader->readRow(1);

// Příklad adaptéru, který přizpůsobuje objekt AnyXmlReader aby implementoval
// požadované rozhraní IReader
$reader = new XmlAdapter(new AnyXmlReader());
$reader->readRow(1);