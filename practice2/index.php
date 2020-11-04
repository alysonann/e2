<?php
#This is the controller

#Game logic will go here
//Player A randomly picks a coin side - heads or tails.
//Create an array with two values--heads or tails
$moves = ['heads','tails'];
//From this array, choose one of those values at random--set that to be Player A's "move"
$playerA = $moves[rand(0, 1)];

if ($playerA == 'heads') {
    $playerB = 'tails';
} else {
    $playerB = 'heads';
}
//A coin is rando mly "flipped," "landing" on either heads or tails
//Create a variable for coinFlip and set it to also be a random value of heads or tails
$coinFlip = $moves[rand(0, 1)];

//If the coin landed on the same side Player A chose, they win.
//Otherwise, Player B wins.

if ($playerA==$coinFlip) {
    $winner = 'Player A';
} else {
    $winner = 'Player B';
}
//var_dump($playerA);

//Use an if statement and if the coinFlip value matches player A's "move"
//Then set the winner to be Player A
//Otherwise set the winner to be Player B
require 'index-view.php';
