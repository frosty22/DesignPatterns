<?php

/**
 *
 * Příklad null objektu - třída implementuje rozhraní
 * a tudíž všechny metody rozhraní. Null objekt, však
 * v metodách neprovádí žádné algoritmy, pouze vrací
 * nezbytné promměné - zpravidla se jedná buď o žádnou návratovou
 * hodnotu, pokud to není vyžadováno, nebo vrací NULL
 * pokud to metoda vyžaduje, alternativně je možné se v praxi setkat
 * i s FALSE/TRUE či 0.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class NullLogger implements ILogger {


	/**
	 *
	 * @param string $message
	 */
	public function log($message)
	{ }

} 