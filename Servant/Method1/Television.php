<?php

namespace Method1;

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
class Television implements \ISalable {


	/**
	 * Počet kusů
	 * @var int
	 */
	private $amount = 20;


	/**
	 * Tento objekt zná služebníka
	 * @var \Vendor
	 */
	private $vendor;


	/**
	 * Zde využíváme další neoficiální návrhový vzor Dependency Injection
	 * mohli bychom si vytvořit instanci Vendor zde a nepřijímat služebníka
	 * přes paramter. Avšak je výhodnější ho přijímat, přes parametr jelikož
	 * sám služebník by mohl mít další závislosti (např. databázeú, tak abychom
	 * nemuseli předávat je z důvodu vytvoření instance.
	 *
	 * @param \Vendor $vendor
	 */
	public function __construct(\Vendor $vendor)
	{
		$this->vendor = $vendor;
	}


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


	/**
	 * Metoda využívající služebníka, aby nemusela duplikovat kód
	 * @return bool
	 */
	public function sell()
	{
		return $this->vendor->sell($this);
	}

	// nějaké další metody objektu ...

} 