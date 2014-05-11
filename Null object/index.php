<?php

/**
 *
 * Null objekt je návrhový vzor, který není součástí GoF.
 *
 * Například máme-li objekt, který se stará o logování zpráv např. FileLogger,
 * a jeho rozhraní ILogger je vyžadováno jinými objekty, které využívají
 * tohle logování. Pak pokud bychom chtěli toto logování vypnout, můžeme
 * jednoduše vytvořit objekt implementující též toto rozhraní, avšak tento
 * objekt nebude "nic dělat" - viz níže GoodExample.
 *
 * Alternativně bychom museli v objektu, kontrolovat zda je tato závislost
 * viz níže - BadExample.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */

require_once __DIR__ . "/ILogger.php";
require_once __DIR__ . "/NullLogger.php";
require_once __DIR__ . "/GoodExample.php";
require_once __DIR__ . "/BadExample.php";


// Příklad využití null objektu, předáváme null logger, který
// nic nedělá :)
$good = new GoodExample(new NullLogger());
$good->something();

// Alternativně bychom nepředávali logger a potom by byl
// kód třídy složitější, z důvodu nezbytnosti kontroly závislosti
// viz obsah třídy BadExample.
$bad = new BadExample();
$bad->something();
