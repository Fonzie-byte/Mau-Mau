<?php

use JetBrains\PhpStorm\Pure;

class Deck
{
	/** @var Card[] $cards */
	public function __construct(
		private array $cards = []
	)
	{}

	public function addCard(Card $newCard): void
	{
		$this->cards[] = $newCard;
	}

	public function shuffle(): void
	{
		shuffle($this->cards);
	}

	public function draw(): ?Card
	{
		return array_shift($this->cards);
	}

	public function getAllCards(): string
	{
		$answer = [];

		foreach ($this->cards as $card)
			$answer[] = $card->getNotation();

		return implode(', ', $answer);
	}

	public function isEmpty(): bool
	{
		return count($this->cards) === 0;
	}
}