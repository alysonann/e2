<?php
#Rock, Paper, Scissors Game
session_start();
if (isset($_SESSION['gamePlay'])) {
    //Create variables "playerName," "player," "computer," "isTie," and "playerWins"
    extract($_SESSION["gamePlay"]);
    $haveResults = true;
} else {
    $haveResults = false;
}
$_SESSION["gamePlay"] = null;

     require 'index-view.php';