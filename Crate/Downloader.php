<?php

/**
 *
 * Příklad nějakého objektu, jehož metoda vytváří a vrací přepravku.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Downloader {


	/**
	 * Metoda, který nám získává obsah URL a její status, avšak
	 * z důvodu, že potřebuje vracet více hodnot, což není přes
	 * návratovou metodu možné, vytváří metoda speciálně určenou
	 * přepravku.
	 *
	 * Metoda by mohla vracet i například pole, s klíči "content" a "status"
	 * avšak při využívání této metody, by nebylo z API jasné, kde ve vráceném
	 * poli data se nachází bez prozkoumání kódu této metody. Proto je vždy
	 * lepší vytvořit vlastní přepravku.
	 *
	 * @param string $url
	 * @return Response
	 */
	public function fetch($url)
	{
		// ... získáme například přes curl data
		return new Response("Získaný obsah", 200);
	}

} 