<?php

interface dealerInterface
    {
    public function shuffle(array $deck): array;
    public function dealFour(array $shuffledDeck): array;
    public function whoWon(int $hand1, int $hand2, Player $player1, Player $player2): string;
    }





