<?php

namespace Method2;

/**
 *
 * Příklad objektu, který chce využít společnou funkčnost tj.
 * umožnit svůj prodej. Avšak abychom neduplikovali kód, tak
 * využívá k této činnosti služebníka.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Mobile implements \ISalable {


	/**
	 * Počet kusů
	 * @var int
	 */
	private $amount = 20;


	/**
	 * Získáme počet kusů
	 * @return int
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * Nastavíme počet kusů
	 * @param int $amount
	 * @return void
	 */
	public function setAmount($amount)
	{
		$this->amount = $amount;
	}

	// nějaké další metody objektu ...

} 