<?php

namespace Builder;

/**
 * Základ builderu s abstraktním rozhraním pro tvorbu objektů.
 *
 * @copyright: Copyright (c) 2013 Ledvinka Vít
 * @author: Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
abstract class BookBuilder
{

	/**
	 * @var \Builder\Book
	 */
	protected $book;

	/**
	 * @return \Builder\Book
	 */
	public function getBook()
	{
		return $this->book;
	}

	/**
	 * Create new instance of book
	 */
	public function createNewBook()
	{
		$this->book = new \Builder\Book();
	}

	/**
	 * Concrete build methods
	 */
	abstract public function buildFoo();
	abstract public function buildBar();

}
