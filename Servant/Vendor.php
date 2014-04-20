<?php

/**
 *
 * Příklad služebníka, který prodává knihy.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Vendor {


	/**
	 * Příklad našeho kodu, který jsme nechtěli duplikovat
	 * ve objektu Television a Mobile.
	 *
	 * Jedná se pouze o příklad, v reálu by bylo lepší samozřejmě
	 * vyhodit například vyjímku namísto FALSE v případě, že není
	 * možné prodat objekt atd.
	 *
	 * @param ISalable $item
	 * @return bool
	 */
	public function sell(ISalable $item)
	{
		$amount = $item->getAmount();
		if ($amount <= 1)
			return FALSE;

		$item->setAmount($amount - 1);

		return TRUE;
	}

} 