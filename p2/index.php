<?php
#Rock, Paper, Scissors Game
session_start();
if (isset($_SESSION['gamePlay'])) {
    //Should create variables "player," "computer," and "result"
    extract($_SESSION["gamePlay"]);

    $haveResults = true;
} else {
    $haveResults = false;
}

$_SESSION["gamePlay"] = null;

     require 'index-view.php';