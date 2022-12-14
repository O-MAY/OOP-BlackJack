<?php

class Deck
{
    private array $deck = [
        'ace of hearts' => '11',
        'ace of diamonds' => '11',
        'ace of clubs' => '11',
        'ace of spades' => '11',
        'two of hearts' => '2',
        'two of diamonds' => '2',
        'two of clubs' => '2',
        'two of spades' => '2',
        'three of hearts' => '3',
        'three of diamonds' => '3',
        'three of clubs' => '3',
        'three of spades' => '3',
        'four of hearts' => '4',
        'four of diamonds' => '4',
        'four of clubs' => '4',
        'four of spades' => '4',
        'five of hearts' => '5',
        'five of diamonds' => '5',
        'five of clubs' => '5',
        'five of spades' => '5',
        'six of hearts' => '6',
        'six of diamonds' => '6',
        'six of clubs' => '6',
        'six of spades' => '6',
        'seven of hearts' => '7',
        'seven of diamonds' => '7',
        'seven of clubs' => '7',
        'seven of spades' => '7',
        'eight of hearts' => '8',
        'eight of diamonds' => '8',
        'eight of clubs' => '8',
        'eight of spades' => '8',
        'nine of hearts' => '9',
        'nine of diamonds' => '9',
        'nine of clubs' => '9',
        'nine of spades' => '9',
        'ten of hearts' => '10',
        'ten of diamonds' => '10',
        'ten of clubs' => '10',
        'ten of spades' => '10',
        'jack of hearts' => '10',
        'jack of diamonds' => '10',
        'jack of clubs' => '10',
        'jack of spades' => '10',
        'queen of hearts' => '10',
        'queen of diamonds' => '10',
        'queen of clubs' => '10',
        'queen of spades' => '10',
        'king of hearts' => '10',
        'king of diamonds' => '10',
        'king of clubs' => '10',
        'king of spades' => '10'];

    public function getDeck(): array
    {
        return $this->deck;
    }

}







