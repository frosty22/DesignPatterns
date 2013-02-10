<?php

namespace FactoryMethod\AbstractMethod;

/**
 * Příklad konkrétního objektu, který je vytvářen pomocí továrničky.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Car implements \FactoryMethod\AbstractMethod\ICar
{

	/**
	 * @var mixed Name of manufactorer
	 */
	public $name;

	/**
	 * @var int Is car selled?
	 */
	public $selled = 0;

	/**
	 * Set name
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * Set if is selled
	 * @param boolean $selled
	 */
	public function setSelled($selled)
	{
		$this->selled = $selled;
	}

}
