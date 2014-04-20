<?php

/**
 *
 * Příklad jednoduché přepravky, která nám přenáší více dat seskupeně,
 * v tomto případě obsah + status. Bylo by možné ji ještě zjednodušit
 * tím, že bychom měli pouze dvě veřejné proměnné a poté by nebylo nutné
 * definovat konstruktor a ony dvě metody. Tento způsob je však jistější
 * v tom směru, že víme že metody content i status něco musí obsahovat (mohou samozřejmě i NULL)
 * a případně bychom mohli udělat i kontrolu dat.
 *
 * V případě, že by třída obsahovala i další metody, například nějaké parsování obsahu apod. Již
 * by se jednalo o plnohodnotný objekt, nikoliv pouze přepravku (nejsem si jist, jak to specifikovat,
 * ale snad si rozumíme).
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Response {


	/**
	 * Obsah URL stránky
	 * @var string
	 */
	private $content;


	/**
	 * Status kód URL stránky
	 * @var int
	 */
	private $status;


	/**
	 * @param string $content
	 * @param string $status
	 */
	public function __construct($content, $status)
	{
		// Zde je možná kontrola dat, například že je platný status
		// buď jednodušší kontrola zda je status INT a content STRING
		// ale mohli bychom i kontrolovat přesně hodnoty statusu, zda
		// odpovídá nějaké množině možných statusů (200, 404, atp)
		$this->content = $content;
		$this->status = $status;
	}


	/**
	 * Získáme obsah stránky
	 * @return string
	 */
	public function getContent()
	{
		return $this->content;
	}


	/**
	 * Získáme HTTP status
	 * @return int
	 */
	public function getStatus()
	{
		return $this->status;
	}

} 