<?php

namespace App;

class RPS
{
    public $playerMove;
    public $computerMove;
    public $result;

    public function __construct(string $playerMove, string $computerMove)
    {
        $this->playerMove = $playerMove;
        $this->computerMove = $computerMove;
    }

    public function playGame()
    {
        //  $this->playerMove = $playerMove;
        //  $this->computerMove = $computerMove;
        //$this->result = $result;

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
}
