<?php

/**
 *
 * Příklad nevhodné třídy, která nevyužívá návrhu Null objektů
 * a aby umožnila nepovinnost logování zpráv, tak musí na všech
 * místech kontrolovat závislost objektu Logger.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class BadExample {


	/**
	 * @var ILogger|NULL
	 */
	private $logger;


	/**
	 * @param ILogger|NULL $logger
	 */
	public function __construct(ILogger $logger = NULL)
	{
		$this->logger = $logger;
	}


	public function something()
	{
		if ($this->logger !== NULL)	// Kontrola závislosti ..
			$this->logger->log("Some message.");

		// ... nějaký algoritmus
	}

} 