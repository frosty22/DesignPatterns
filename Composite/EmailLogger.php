<?php

/**
 *
 * Zasílání zpráv pomocí e-mailu.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class EmailLogger implements ILogger {


	/**
	 * @param string $message
	 */
	public function log($message)
	{
		echo "Email send" . PHP_EOL;
	}


}