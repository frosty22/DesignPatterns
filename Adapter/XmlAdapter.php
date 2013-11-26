<?php

/**
 *
 * Adaptér implementuje požadované rozhraní, a zároveň
 * dostává instanci objektu, jehož rozhraní chceme přizpůsobit.
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class XmlAdapter implements IReader {


	/**
	 * @var AnyXmlReader
	 */
	private $reader;


	/**
	 * @param AnyXmlReader $reader
	 */
	public function __construct(AnyXmlReader $reader)
	{
		$this->reader = $reader;
	}


	/**
	 * Vrátí řádek v asociativním poli
	 * @param int $number číslo řádku
	 * @return array|NULL
	 */
	public function readRow($number)
	{
		$this->reader->getNode();
		// .. tady bychom například četli uzli, než bychom dostali
		// požadovný dle čísla řádku a převedlo note na asociativní pole
		echo "Přečteme řádek $number z XML" . PHP_EOL;
		return array(/** výsledné asociativní pole */);
	}

}