<?php

namespace App\Commands;

use App\RPS; # Class for game play logic; used below in seed method and when playing game

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
            'player_move' => 'varchar(8)', # rock, paper, scissors
            'computer_move' => 'varchar(8)', # rock, paper, scissors
            'result' => 'varchar(4)', # win, loss, tie
            'time' => 'timestamp',
            'name' => 'varchar(255)'
    ]);
    }
    
    public function seed()
    {
        {
            # Instantiate a new instance of the Faker\Factory class
            $faker = \Faker\Factory::create();

            # Use a loop to create 10 past rounds
            for ($i = 0; $i < 10; $i++) {

                #Call RPS method to generate random move for both computer and player
                $computerMove = RPS::getMove();
                $playerMove = RPS::getMove();
                
                # Create instance of RPS class for game logic
                $game = new RPS($playerMove, $computerMove);

                # Call RPS method playGame to get win, loss, or tie
                $result = $game->playGame();

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
