<?php

/**
 *
 * Čtečka dat ve formátu CSV
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class CsvReader implements IReader {


	/**
	 * Vrátí řádek v asociativním poli
	 * @param int $number číslo řádku
	 * @return array|NULL
	 */
	public function readRow($number)
	{
		echo "Přečteme řádek $number z CSV" . PHP_EOL;
		return array(/** výsledné asociativní pole */);
	}

}