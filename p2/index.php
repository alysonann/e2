<?php
#Rock, Paper, Scissors Game
session_start();
//Check if game has been played
if (isset($_SESSION['gamePlay'])) {
    //Create variables "playerName," "player," "computer," "isTie," and "playerWins"
    extract($_SESSION["gamePlay"]);
    $haveResults = true;
} else {
    $haveResults = false;
}
//This resets gamePlay on page load to clear previous game.
$_SESSION["gamePlay"] = null;

     require 'index-view.php';