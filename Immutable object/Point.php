<?php

/**
 *
 * Příklad immutable objektu, tj. objektu u něhož nedojde
 * ke změně jeho atributů.
 *
 * @copyright Copyright (c) 2014 Ledvinka Vít
 * @author Ledvinka Vít, frosty22 <ledvinka.vit@gmail.com>
 *
 */
class Point {


	/**
	 * @var int
	 */
	private $x;


	/**
	 * @var int
	 */
	private $y;


	/**
	 * @param int $x
	 * @param int $y
	 */
	public function __construct($x, $y)
	{
		$this->x = $x;
		$this->y = $y;
	}


	/**
	 * Při změně atributů vytváříme nový objekt, abychom právě
	 * zaručili onu neměnnost objektu.
	 * @param int $x
	 * @return Point
	 */
	public function setX($x)
	{
		return new Point($x, $this->y);
	}


	/**
	 * Při změně atributů vytváříme nový objekt, abychom právě
	 * zaručili onu neměnnost objektu.
	 * @param int $y
	 * @return Point
	 */
	public function setY($y)
	{
		return new Point($this->x, $y);
	}


	/**
	 * @return int
	 */
	public function getX()
	{
		return $this->x;
	}


	/**
	 * @return int
	 */
	public function getY()
	{
		return $this->y;
	}

} 