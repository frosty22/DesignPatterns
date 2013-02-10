<?php

namespace FactoryMethod\AbstractMethod;

/**
 * Rozhraní, které musí implementovat každý potomek továrničky.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
interface ICar
{

	/**
	 * Set name
	 * @param string $name
	 */
	public function setName($name);

	/**
	 * Set if is selled
	 * @param boolean $selled
	 */
	public function setSelled($selled);

}
