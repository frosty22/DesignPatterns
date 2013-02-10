<?php

namespace FactoryMethod\InstanceMethod;

/**
 * Objekt obsahující tovární metody vytvářející instance objektu.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Product
{

	/**
	 * @var mixed
	 */
	private $foo;

	/**
	 * @var mixed
	 */
	private $bar;

	/**
	 * Konstruktor přijímající instanční parametry.
	 * @param mixed $foo
	 * @param mixed $bar
	 */
	public function __construct($foo, $bar)
	{
		$this->foo = $foo;
		$this->bar = $bar;
	}

	/**
	 * Tovární metoda vytvářející objekt odvozený od toho objektu pouze
	 * se záměnou jednoho parametru.
	 * @param mixed $foo
	 * @return Product
	 */
	public function setFoo($foo)
	{
		return new \FactoryMethod\InstanceMethod\Product($foo, $this->bar);
	}

	/**
	 * Metoda pro ukázku příkladu vypisující parametry objektu.
	 * @return string
	 */
	public function test()
	{
		return $this->foo . " - " . $this->bar;
	}

}
