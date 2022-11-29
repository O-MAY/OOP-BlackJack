<?php

require_once 'Dealer.php';
require_once 'Deck.php';
require_once 'Player.php';

$orderedDeck = new Deck();
$DonaldTrump = new Dealer();
$LizTruss = new Player();
$RishiSunak = new Player();

$shuffleDeck = $DonaldTrump->shuffle($orderedDeck->getDeck());
$dealtFour = $DonaldTrump->dealFour($shuffleDeck);

$LizTruss->setPlayerName('Liz Truss');
$RishiSunak->setPlayerName('Rishi Sunak');

$LizTrussHand = array_slice($dealtFour, 0, 2);
$RishiSunakHand = array_slice($dealtFour, 2, 4);

$LizTrussPlayed = $LizTruss->playHand($LizTrussHand);
$RishiSunakPlayed = $RishiSunak->playHand($RishiSunakHand);

echo '<pre>';
print_r('Liz played a hand worth ' . $LizTrussPlayed . ' points!');
echo '<pre>';

echo '<pre>';
print_r('Rishi played a hand worth ' . $RishiSunakPlayed . ' points!');
echo '<pre>';

$whoWon = $DonaldTrump->whoWon($LizTrussPlayed, $RishiSunakPlayed, $LizTruss, $RishiSunak);

echo '<pre>';
print_r($whoWon);
echo '<pre>';












