<?php

session_start();

$player = $_GET["player"];
$playerName = $_GET["playerName"];
$choices = ['rock','paper','scissors'];
$computer = $choices[rand(0, 2)];
//Booleans to communicate results to view file so messages can be customized there
$isTie = null;
$playerWins = null;

if ($player == $computer) {
    $isTie = true;
} elseif (($player =='rock' and $computer == 'scissors') ||
         ($player == 'paper' and $computer == 'rock') ||
          ($player == 'scissors' and $computer == 'paper')) {
    $playerWins = true;
} elseif (($player== 'rock' and $computer =='paper') ||
           ($player == 'paper' and $computer == 'scissors')||
           ($player == 'scissors' and $computer == 'rock')) {
    $playerWins = false;
}


$_SESSION["gamePlay"] = [
    "playerName" => $playerName,
    "player" => $player,
    "computer" => $computer,
    "isTie" => $isTie,
    "playerWins" => $playerWins
];
header("Location: index.php");