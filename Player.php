<?php

require_once 'playInterface.php';

class Player implements playerInterface



{
    public string $playerName = '';
    /**
     * @return string
     */
    public function getPlayerName(): string
    {
        return $this->playerName;
    }

    /**
     * @param string $playerName
     */
    public function setPlayerName(string $playerName): void
    {
        $this->playerName = $playerName;
    }

    function playHand(array $hand): int
    {
        return array_sum($hand);
    }
}