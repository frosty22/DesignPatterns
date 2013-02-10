<?php

namespace Singleton;

/**
 * Příklad objektu, které mu lze vytvořit pouze jednu instanci.
 * Singleton
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 */
class Connection
{

	/**
	 * @var Singleton\Connection
	 */
	private static $instance = null;


	/**
	 * Definováním viditelnosti protected u konstruktoru
	 * zamezíme vytváření instance objektu.
	 */
	protected function __construct() {}


	/**
	 * Definováním viditelnosti protected u magické metody __clone
	 * zamezíme klonování objektu
	 */
	protected function __clone() {}


	/**
	 * Metoda zajišťující vytvoření instance objektu
	 * @return Singleton\Connection
	 */
	public static function getInstance() {
		if (self::$instance === null) {
			self::$instance = new self();
		}
		return self::$instance;
	}

}
