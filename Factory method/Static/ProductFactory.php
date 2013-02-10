<?php

namespace FactoryMethod\StaticMethod;

/**
 * Továrnička obsahující statickou metodu pro vytváření instancí.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class ProductFactory
{

	/**
	 * Příklad metody vytvářející instanci na základě parametru
	 * @param mixed $bar Some bar parameter
 	 * @return FactoryMethod\StaticMethod\Foo
	 * @throws \Exception
	 */
	public static function create($bar)
	{
		$foo = new \FactoryMethod\StaticMethod\Foo();
		$foo->setBar($bar);
		return $foo;
	}

}
