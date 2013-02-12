<?php

namespace Builder;

/**
 * Třída řídící proces vytváření.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class BookDirector
{

	/**
	 * @var \Builder\BookBuilder
	 */
	protected $bookBuilder;

	/**
	 * Přijímáme builder, který bude použit pro konstrukci.
	 */
	public function setBookBuilder(\Builder\BookBuilder $bookBuilder)
	{
		$this->bookBuilder = $bookBuilder;
	}

	/**
	 * @return \Builder\Book
	 */
	public function getBook()
	{
		return $this->bookBuilder->getBook();
	}

	/**
	 * Metoda, kterí konstruuje konkrétní objekt.
	 */
	public function constructBook()
	{
		$this->bookBuilder->createNewBook();
		$this->bookBuilder->buildBar();
		$this->bookBuilder->buildFoo();
	}

}
