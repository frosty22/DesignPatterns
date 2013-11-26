<?php

/**
 *
 * Rozhraní pro čtení dat.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
interface IReader {


	/**
	 * Vrátí řádek v asociativním poli
	 * @param int $number číslo řádku
	 * @return array|NULL
	 */
	public function readRow($number);


}