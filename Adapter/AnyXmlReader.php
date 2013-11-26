<?php

/**
 *
 * Příklad jak by mohlo vypadat rozhraní staženého
 * XmlReaderu, které neimplementuje požadované rozhraní IReader,
 * a proto vytvoříme adaptér XmlAdapter
 *
 * @copyright Copyright (c) 2013 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class AnyXmlReader {


	public function getNode()
	{
		// Tato funkce například čte uzel z XML souboru
		// a při každém přečtení vrátí tento řádek ve formátu
		// objektu Node ...
		return new Node();
	}

}


class Node {

	// Uzel Node
	// ... d
}