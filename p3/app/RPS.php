<?php

namespace App;

class RPS
{
    public $playerMove;
    public $computerMove;
    //public $result;

    public function __construct(string $playerMove, string $computerMove)
    {
        $this->playerMove = $playerMove;
        $this->computerMove = $computerMove;
    }

    public function playGame()
    {
        if ($this->computerMove == $this->playerMove) {
            $result = "tie"; # The game is a tie; no winner
        } elseif (($this->playerMove =='rock' and $this->computerMove == 'scissors') ||
                        ($this->playerMove == 'paper' and $this->computerMove == 'rock') ||
                        ($this->playerMove == 'scissors' and $this->computerMove == 'paper')) {
            $result = "win"; # The player wins
        } elseif (($this->playerMove== 'rock' and $this->computerMove =='paper') ||
                        ($this->playerMove == 'paper' and $this->computerMove == 'scissors')||
                        ($this->playerMove == 'scissors' and $this->computerMove == 'rock')) {
            $result = "loss"; # The player loses
        }
        return $result;
    }

    public static function getMove()
    {
        $choices = ['rock','paper','scissors'];
        $randomMove = $choices[rand(0, 2)];
        return $randomMove;
    }
}
