<?php

namespace Builder;

/**
 * Konkrétní instance - produkt, který bude skládán.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Book
{

	/**
	 * @var mixed
	 */
	public $foo;

	/**
	 * @var mixed
	 */
	public $bar;

	/**
	 * Testovací metoda
	 */
	public function test()
	{
		echo $this->foo . " - " . $this->bar . PHP_EOL;
	}

}
