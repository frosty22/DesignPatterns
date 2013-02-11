<?php

namespace Prototype;

/**
 * Příklad objektu, který je připraven pro klonování - zajišťuje hluboké
 * klonování, viz magická metoda __clone.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Foo
{

	/**
	 * @var \Prototype\Bar
	 */
	public $bar;

	/**
	 * Příklad implementace hlubokého klonování (tzv. deepClone).
	 * Metoda je zavolána po vytvoření klonu na nové instanci,
	 * což způsobí, že bude naklonován objekt.
	 */
	public function __clone()
	{
		$this->bar = clone $this->bar;
	}

}
