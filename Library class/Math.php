<?php

namespace Utility;

/**
 *
 * Příklad knihovní třídy, u této třídy jsme znemožnili
 * dědičnost označením třídy jako finální a zároveň jsme
 * znemožnili vytváření instancí označením kontruktoru
 * jako privátní.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
final class Math {


	/**
	 * Znemožnění vytváření instance
	 */
	private function __construct()
	{ }


	/**
	 * Příklad metody, která odečítá dvě čísla
	 * @param int $a
	 * @param int $b
	 * @return int
	 */
	public static function subtraction($a, $b)
	{
		return $a - $b;
	}


	/**
	 * Příklad metody, která sčítá dvě čísla
	 * @param int $a
	 * @param int $b
	 * @return int
	 */
	public static function addition($a, $b)
	{
		return $a + $b;
	}

} 