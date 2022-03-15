<?php
/**
 * TODO:
 * [x] 52 cards
 * [x] 4 hands
 * [x] Each dealt 7 cards
 * [x] First hand plays a card
 * [x] Every hand after plays a card either matching the "number" or the suit
 * [x] Turns go in rounds
 * [x] If they can't, they draw a card
 * [x] If the deck is empty, shuffle all but the last-played card into the deck and then draw.
 * [x] The first who empties their hand wins
 * [x] Print all to console
 *
 * NOTE:
 * 1. Print all to console!
 * 2. Deal cards from deck, don't deal random copies!
 * 3. Keep number and suit separate!
 * 4. Remember which cards were played!
 */

require_once 'Classes/deck.php';
require_once 'Classes/card.php';
require_once 'Classes/hand.php';

// Make a deck of cards
$deck = new Deck();

// Fill it in with every possible card, excluding Jokers
for ($s = 0; $s < 4; $s++)  {
	$suitSymbol = match ($s) {
		0 => '♠',
		1 => '♥',
		2 => '♣',
		3 => '♦',
		// default: Throw an error
	};

	for ($n = 0; $n < 13; $n++) {
		$cardNumber = match ($n) {
			10 => 'J',
			11 => 'Q',
			12 => 'K',
			default => $n + 1,
		};

		$deck->addCard(new Card($suitSymbol, $cardNumber));
	}
}

// Now that the deck is built, shuffle it.
$deck->shuffle();

// Deal 4 hands
/** @var Hand[] $players */
$players = [];

for ($h = 0; $h < 4; $h++) {
	$currentlyDealing = [];

	for ($c = 0; $c < 7; $c++)
		$currentlyDealing[] = $deck->draw();

	$name = match ($h) {
		0 => 'Anna',
		1 => 'Bob',
		2 => 'Chris',
		3 => 'Dahlia',
		default => chr(65 +$h), // Just in case I want to test it with more than 4 players.
	};

	$players[$name] = new Hand($currentlyDealing);
}

// Show us the hands
echo 'Dealt the following hands:' . PHP_EOL;
foreach ($players as $name => $player) {
	echo $name .  ': ' . $player->getAllCards() . PHP_EOL;
}

// And which other cards are left
echo 'The remaining deck is: ' . $deck->getAllCards() . PHP_EOL . PHP_EOL;

// Play!
$gameOver = false;
$currentCard = new Card();
$previousCards = [];  // This isn't complex enough to bother with a class, really.

// Keep playing until the game is over.
while (!$gameOver) {
	// Give each player a turn
	foreach ($players as $name => $player) {
		$playedCard = $player->turn(($currentCard));

		// If this is null, that means they were not able to play a card.
		// Deal them a card instead.
		if ($playedCard === null) {
			// If there are no cards left to draw.
			if ($deck->isEmpty()) {
				// Re-build the deck with every-except-the-last previously played card.
				$deck = new Deck(array_slice($previousCards, 0, count($previousCards) - 1));
				$previousCards = [array_pop($previousCards)];

				// Shuffle the deck before announcing what we re-built it into.
				$deck->shuffle();
				echo 'Re-built the deck, it\'s now: ' . $deck->getAllCards() . PHP_EOL;
			}

			// Weather we re-built the deck or not, draw a card!
			$toDraw = $deck->draw();

			// Give it to the player and let it be known!
			$player->take($toDraw);
			echo "$name drew {$toDraw->getNotation()}\n";
		}
		// If it's not null, if's a card that they were able to play!
		else {
			// Update the currently placed card and let them know what was played!
			$currentCard = $playedCard;
			$previousCards[] = $playedCard;
			echo "$name played {$playedCard->getNotation()}\n";

			// If they won
			if ($player->won()) {
				// Say so and leave the foreach
				// (which prints an EOL and checks the while's condition again)
				echo "\n$name won!\n";
				$gameOver = true;
				break;
			}
		}
	}

	// An extra white-line after every round to improve legibility.
	echo PHP_EOL;
}
