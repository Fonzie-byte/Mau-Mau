<?php

class Hand
{
	/** @var Card[] $hand */
	public function __construct(
		private array $hand = [],
	)
	{}

	public function getAllCards(): string
	{
		$answer = [];

		foreach ($this->hand as $card)
			$answer[] = $card->getNotation();

		return implode(', ', $answer);
	}

	public function turn(Card $lastPlayed): ?Card
	{
		// No card yet? Play anything!
		if ($lastPlayed->getNotation() === '')
			return array_shift($this->hand);
		// There is a card?
		else
		{
			// Check all cards in hand
			foreach ($this->hand as $index => $card) {
				// If either the suit or number matches, play that card!
				if ($card->getSuit() === $lastPlayed->getSuit()
					|| $card->getNumber() === $lastPlayed->getNumber()) {
					unset($this->hand[$index]);
					return $card;
				}
			}
		}

		// Still here? Tell them we can't play!
		// So they can deal us a card instead!
		return null;
	}

	public function take(Card $newCard): void
	{
		$this->hand[] = $newCard;
	}

	public function won(): bool
	{
		return count($this->hand) === 0;
	}
}