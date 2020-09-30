<?php
#Rock, Paper, Scissors Game

//Player A and Player B randomly “throw” either Rock, Paper or Scissors.
$choices = ['rock','paper','scissors'];
$playerA = $choices[rand(0, 2)];
$playerB = $choices[rand(0, 2)];

//Compare the moves of Player A and B and decide if one wins, or if there is a tie!
//Set appropriate result message based on moves
 $result = "";
        if ($playerA == $playerB) {
            $result = "It is a tie!";
        } elseif (($playerA =='rock' and $playerB == 'scissors') ||
         ($playerA == 'paper' and $playerB == 'rock') ||
         ($playerA == 'scissors' and $playerB == 'paper')) {
            $result = "Player A wins!";
        } elseif (($playerA== 'rock' and $playerB =='paper') ||
          ($playerA == 'paper' and $playerB == 'scissors')||
          ($playerA == 'scissors' and $playerB == 'rock')) {
            $result = "Player B wins!";
        }
    require 'index-view.php';