<?php

/**
 *
 * Návrhový vzor Neměnný objekt (ang. Immutable object) nepatří mezi
 * vzory z GoF.
 *
 * Jedná se o návrhový vzor, který zařizuje neměnnost objektů. Pokud
 * potřebujeme vytvořit objekt, u něhož nechceme aby nám mohl jiný objekt
 * či proces změnit jeho hodnotu, tak využijeme tohoto vzoru.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */

require_once __DIR__ . "/Point.php";


$point = new Point(1, 2);
echo $point->getX();	// Dostaneme hodnotu 1

$point2 = $point->setX(10);
echo $point->getX();	// Dostaneme hodnotu 1, nedojde ke změně - immutable object
echo $point2->getX();	// Dostaneme hodnotu 10


/**
 * U tohoto návrhového vzoru však vidím problém, kterým je právě nezbytnost znát
 * z pohledu API, že se jedná o immutable objekt. Takže toto musí býti jasné z názvu
 * objektu, například PointImmutable a doufat, že programátoři kteří objekty budou
 * využívat, jsou s tímto termínem obeznámeni.
 *
 * V opačném případě, viz právě v tomto případu, se bez prozkoumání kódu objektu Point,
 * může objevit a pravděpodobně objeví WTF problém - viz:
 */

$point = new Point(5, 5);
$point->setX(10);
echo $point->getX(); // WTF: Právě tady bych čekal 10, ale vrátí 5, tudíž musím prozkoumat kód
					 // objektu Point, což není košér.