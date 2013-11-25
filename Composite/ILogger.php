<?php

/**
 *
 * Interface of all loggers
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
interface ILogger {


	/**
	 * @param string $message
	 * @return void
	 */
	public function log($message);

}