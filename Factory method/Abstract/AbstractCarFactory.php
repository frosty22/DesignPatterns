<?php

namespace FactoryMethod\AbstractMethod;

/**
 * Abstraktní třída, která obsahuje abstraktní metodu, díky které potomci
 * zařizují vlastní implementaci vytváření objektu.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
abstract class AbstractCarFactory
{

	/**
	 * Metoda, která nastavuje vytvořený objekt, pomocí továrničky v potomcích.
	 * @return FactoryMethod\AbstractMethod\ICar
	 * @throws \Exception
	 */
	public function sellCar()
	{
		$car = $this->createCar();
		if (!$car instanceof \FactoryMethod\AbstractMethod\ICar) {
			throw new \Exception("Method of class " . __CLASS__ . " must return ICar.");
		}
		$car->setSelled(TRUE);
		return $car;
	}

	/**
	 * Metoda, která vytváří příslušnou instanci.
	 * @return FactoryMethod\AbstractMethod\ICar
	 */
	abstract protected function createCar();

}
