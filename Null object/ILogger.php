<?php

/**
 *
 * Rozhraní pro všechny loggery
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
interface ILogger {


	/**
	 * Metoda sloužící k zalogování zprávy
	 * @param string $message
	 * @return void
	 */
	public function log($message);

} 