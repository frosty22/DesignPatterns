<?php

/**
 *
 * Logování zpráv do souboru.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class FileLogger implements ILogger {


	/**
	 * @param string $message
	 */
	public function log($message)
	{
		echo "Message saved to the file" . PHP_EOL;
	}


}