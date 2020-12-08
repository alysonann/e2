<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
    
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'player_move' => 'varchar(8)',
            'computer_move' => 'varchar(8)',
            'result' => 'varchar(4)', # 0, 1, 2 for win, loss, or tie
            'time' => 'timestamp',
            'name' => 'varchar(255)'
    ]);
    }
    // public function playGame(str $playerMove, str $computerMove)
    // {
    //     if ($computerMove == $playerMove) {
    //         $result = 2; # The game is a tie; no winner
    //     } elseif (($playerMove =='rock' and $computerMove == 'scissors') ||
    //         ($playerMove == 'paper' and $computerMove == 'rock') ||
    //         ($playerMove == 'scissors' and $computerMove == 'paper')) {
    //         $result = 0; # The player wins
    //     } elseif (($playerMove== 'rock' and $computerMove =='paper') ||
    //         ($playerMove == 'paper' and $computerMove == 'scissors')||
    //         ($playerMove == 'scissors' and $computerMove == 'rock')) {
    //         $result = 1; # The player loses
    //     }
    //     return $result;
    // }

    public function seed()
    {
        {
            # Instantiate a new instance of the Faker\Factory class
            $faker = \Faker\Factory::create();


        
            //$moves = ['heads','tails'];
            //$randomMove = array_rand($moves);

    
            # Use a loop to create 10 past rounds
            for ($i = 0; $i < 10; $i++) {
                $choices = ['rock','paper','scissors'];
                $computerMove = $choices[rand(0, 2)];
                $playerMove = $choices[rand(0, 2)];
                //$result = null;

                if ($computerMove == $playerMove) {
                    $result = "tie"; # The game is a tie; no winner
                } elseif (($playerMove =='rock' and $computerMove == 'scissors') ||
                    ($playerMove == 'paper' and $computerMove == 'rock') ||
                    ($playerMove == 'scissors' and $computerMove == 'paper')) {
                    $result = "win"; # The player wins
                } elseif (($playerMove== 'rock' and $computerMove =='paper') ||
                    ($playerMove == 'paper' and $computerMove == 'scissors')||
                    ($playerMove == 'scissors' and $computerMove == 'rock')) {
                    $result = "loss"; # The player loses
                }

                # Set up a round
                $round = [
                    'player_move' => $playerMove,
                    'computer_move' => $computerMove,
                    'result' => $result,
                    'time' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                    'name' => $faker->firstName
                ];
    
                # Insert the round
                $this->app->db()->insert('rounds', $round);
            }
        }
    }
}