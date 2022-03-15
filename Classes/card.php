<?php

class Card
{
	public function __construct(
		private string $suit = '',
		private string $number = '',
	)
	{}

	public function getNotation(): string
	{
		return $this->suit . $this->number;
	}

	public function getSuit(): string
	{
		return $this->suit;
	}

	public function getNumber(): string
	{
		return $this->number;
	}
}