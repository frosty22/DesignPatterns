<?php

/**
 *
 * Příklad vhodné třídy, která má ILogger jako povinnou závislost,
 * a pokud chceme vypnout logování, pak musíme vytvořit null objekt
 * implementující toto rozhraní (viz NullLogger).
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class GoodExample {


	/**
	 * @var ILogger
	 */
	private $logger;


	/**
	 * @param ILogger $logger
	 */
	public function __construct(ILogger $logger)
	{
		$this->logger = $logger;
	}


	public function something()
	{
		$this->logger->log("Some message.");
		// ... nějaký algoritmus
	}

} 