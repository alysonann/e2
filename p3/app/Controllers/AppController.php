<?php
namespace App\Controllers;

use App\RPS; # Class for game play logic; used below and for seed method

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $results = $this->app->old('results');
        return $this->app->view('index', [
            'results' => $results
        ]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history', [
            'rounds' => $rounds
        ]);
    }
    public function round()
    {
        $id = $this->app->param('id');
        $round = $this->app->db()->findById('rounds', $id);

        # If a user tries to view a round that doesn't exist, direct to error page
        if (is_null($round)) {
            return $this->app->view('errors.404');
        }
        # Otherwise display round view
        else {
            return $this->app->view('round', [
            'round'=>$round
        ]);
        }
    }

    public function play()
    {
        # Require user to select a move
        $this->app->validate([
            'choice'=>'required'
        ]);

        # Get player selection from radio button
        $playerMove = $this->app->input('choice');

        # Call RPS method to generate random move
        $computerMove = RPS::getMove();

        #Get player name from form, or use default value
        $playerName = $this->app->input('playerName');

        # Create instance of RPS class for game logic
        $game = new RPS($playerMove, $computerMove);

        # Call RPS method playGame to get win, loss, or tie
        $result = $game->playGame();

        # Save results to the database and set up a round
        $round = [
                'player_move' => $playerMove,
                'computer_move' => $computerMove,
                'result' => $result,
                'time' =>date('Y-m-d H:i:s'),
                'name' => $playerName
            ];

        # Insert the round
        $this->app->db()->insert('rounds', $round);

        # Redirect the user back to the home page with the form to play again
        $this->app->redirect('/', [
            'results' =>[
                'player_move'=>$playerMove,
                'computer_move' => $computerMove,
                'result' => $result,
                'name' => $playerName
            ]
        ]);
    }
}
