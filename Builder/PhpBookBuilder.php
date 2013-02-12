<?php

namespace Builder;

/**
 * Konkrétní implementace builderu.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class PhpBookBuilder extends \Builder\BookBuilder
{

	/**
	 * Konkrétní implementace metody.
	 */
	public function buildBar()
	{
		$this->book->bar = "PHP";
	}

	/**
	 * Konkrétní implementace metody.
	 */
	public function buildFoo()
	{
		$this->book->foo = "Hypertext PreProcesor";
	}

}
