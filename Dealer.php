<?php

require_once 'Deck.php';
require_once 'DealerInterface.php';
require_once 'Player.php';



class Dealer implements dealerInterface
{
    function shuffle(array $deck): array
    {
        $keys = array_keys($deck);
        shuffle($keys);

        $shuffledDeck = [];

        foreach ($keys as $key) {
            $shuffledDeck[$key] = $deck[$key];
        }
        return $shuffledDeck;
    }

    function dealFour(array $shuffledDeck): array
    {
        return array_splice($shuffledDeck, 0, 4);
    }

    function whoWon(int $hand1, int $hand2, Player $player1, Player $player2): string
    {
        if ($hand1 > 21 && $hand2 > 21) {
            return 'Both ' . $player1->getPlayerName() . ' and ' . $player2->getPlayerName() . 'lose!';
        } elseif ($hand1 == $hand2) {
            return 'Draw - neither ' . $player1->getPlayerName() . ' or ' . $player2->getPlayerName() . 'wins!';
        } elseif ($hand1 > 21) {
            return $player2->getPlayerName() . ' wins!';
        } elseif ($hand2 > 21) {
            return $player1->getPlayerName() . ' wins!';
        } elseif ($hand1 > $hand2) {
            return $player1->getPlayerName() . ' wins!';
        } elseif ($hand2 > $hand1) {
            return $player2->getPlayerName() . ' wins!';
        }

        return 'What happened?!?!! The game has broke!';
    }

}




