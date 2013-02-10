<?php

namespace FactoryMethod\AbstractMethod;

/**
 * Konkrétní továrnička, která se stará o vytvoření instance objektu.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class AudiCarFactory extends \FactoryMethod\AbstractMethod\AbstractCarFactory
{

	/**
	 * Konkrétní továrnička vracející instanci třídy Car.
	 * @return Car|FactoryMethod\AbstractMethod\Car
	 */
	protected function createCar()
	{
		$car = new \FactoryMethod\AbstractMethod\Car();
		$car->setName("Audi");
		return $car;
	}

}
