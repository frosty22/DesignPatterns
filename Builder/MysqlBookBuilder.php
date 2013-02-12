<?php

namespace Builder;

/**
 * Konkrétní implementace builderu.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class MysqlBookBuilder extends \Builder\BookBuilder
{

	/**
	 * Konkrétní implementace metody.
	 */
	public function buildBar()
	{
		$this->book->bar = "MySQL";
	}

	/**
	 * Konkrétní implementace metody.
	 */
	public function buildFoo()
	{
		$this->book->foo = "Database layer";
	}

}
