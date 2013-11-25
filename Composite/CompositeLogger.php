<?php

/**
 *
 * Návrhový vzor composite - třída implementuje ILogger stejně
 * jako jednotlivé loggery a spojuje více jednotlivých loggerů
 * dohromady.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class CompositeLogger implements ILogger {


	/**
	 * @var array
	 */
	private $loggers = array();


	/**
	 * @param ILogger $logger
	 */
	public function addLogger(ILogger $logger)
	{
		$this->loggers[] = $logger;
	}


	/**
	 * @param string $message
	 */
	public function log($message)
	{
		foreach ($this->loggers as $logger) {
			$logger->log($message);
		}
	}

}