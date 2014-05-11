<?php

/**
 *
 * Návrhový vzor Library class, nebo-li knihovní třída nepatří
 * mezi vzory GoF. Jedná se o třídu, která slouží ke seskupení
 * statických metod, které k sobě logicky patří. Tyto třídy se
 * převážně označují Utility, například v namespace Utility.
 *
 * A jelikož se jedná pouze o seskupení statických metod, pak by
 * mělo být znemožněno vytvoření instance této třídy a třída by měla
 * být označena jako finální.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */

require_once __DIR__ . "/Math.php";

// Příklad volání metod .. nic zváštního - více viz třída Math
echo \Utility\Math::subtraction(5, 3);
echo \Utility\Math::addition(6, 7);

