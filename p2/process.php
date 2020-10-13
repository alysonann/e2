<?php

session_start();

$player = $_GET["player"];

$choices = ['rock','paper','scissors'];
$computer = $choices[rand(0, 2)];
$result = "";


if ($player == $computer) {
    $result = "It is a tie!";
} elseif (($player =='rock' and $computer == 'scissors') ||
         ($player == 'paper' and $computer == 'rock') ||
          ($player == 'scissors' and $computer == 'paper')) {
    $result = "You win!";
} elseif (($player== 'rock' and $computer =='paper') ||
           ($player == 'paper' and $computer == 'scissors')||
           ($player == 'scissors' and $computer == 'rock')) {
    $result = "The computer wins!";
}

$_SESSION["gamePlay"] = [
    "player" => $player,
    "computer" => $computer,
    "result" => $result,
];
var_dump("gamePlay");
header("Location: index.php");