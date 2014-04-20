<?php

/**
 * Návrhový vzor služebník (ang. Servant) nepatří mezi oficiální
 * vzory z GoF.
 *
 * Jedná se o vzor, který využijeme v případě, že potřebujeme pro
 * několik "podobných" objektů definovat stejnou funkčnost a chceme
 * se vyhnout duplikaci kódu.
 *
 * V podstatě je to velice běžný vzor, který využíváte a objekty,
 * kterým říkáme služby (např. známe z nette) využívají tento návrhový
 * vzor.
 *
 * Tento návrhový vzor lze implementovat dvěma způsoby - v prvním případě
 * znají příslušné objekty onoho služebníka a přímo ho volají sami, tudíž
 * ho nemusí znát okolí.
 *
 * V druhé případě naopak příslušné objekty o daném služebníkovi neví, avšak
 * musí ho znát okolí.
 *
 * Pro oba příklady využiji stejný případ, pouze v tomto konkrétním příkladu
 * je metoda 2 vhodnější, avšak můžete nalézt samozřejmě i lepší využití
 * metodou 1.
 *
 * Služebník (v příkladu Vendor) může být v obou případech stejný, jak jsem již
 * uvedl rozdíl je v implementaci buď v daných objektech nebo v okolí.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */

require_once __DIR__ . "/ISalable.php";
require_once __DIR__ . "/Vendor.php";
require_once __DIR__ . "/Method1/Mobile.php";
require_once __DIR__ . "/Method1/Television.php";
require_once __DIR__ . "/Method2/Mobile.php";
require_once __DIR__ . "/Method2/Television.php";


// Metoda 1: Objekty sami znají služebníka a okolní kód nikoliv
// tím, že předáváme služebníka jelikož je to závislost onoho objektu
// tak to neznamená, že ho známe, pouze mu předáváme nějaký objekt, který
// vyžaduje, avšak nevyužíváme jeho API a nepotřebujeme vědět co umí.
$television = new \Method1\Television(new Vendor());
echo $television->sell();   // využili jsme metodu, která využívá společníka a neduplikuje kod

$mobile = new \Method1\Mobile(new Vendor());
echo $mobile->sell();		// využili jsme metodu, která využívá společníka a neduplikuje kod



// Metoda 2: Objekty neznají služebníka, avšak mi ho znát nyní musíme
$vendor = new Vendor();

$television = new \Method2\Television();
echo $vendor->sell($television); // využili jsme metodu, kterou jsme nechtěli duplikovat v objektu television a mobile

$television = new \Method2\Mobile();
echo $vendor->sell($television); // využili jsme metodu, kterou jsme nechtěli duplikovat v objektu television a mobile




