<?php

/**
 *
 * Rozhraní, které musí implementovat všechny objekty, které
 * chtějí využívat služebníka prodejce (ang. Vendor)
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
interface ISalable {


	/**
	 * Získej počet možných položek k prodeji
	 * @return int
	 */
	public function getAmount();


	/**
	 * Nastav počet položek k prodeji
	 * @param int $amount
	 * @return int
	 */
	public function setAmount($amount);

} 