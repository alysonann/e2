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
        return $this->app->view('round', [
            'round'=>$round
        ]);
    }

    public function play()
    {
        $this->app->validate([
            'choice'=>'required'
        ]);
        # Get player selection from radio button
        $playerMove = $this->app->input('choice');

        #Get player name from form, or use default value
        $playerName = $this->app->input('playerName');

        # Array of moves for ccmputer
        $choices = ['rock','paper','scissors'];
        $computerMove = $choices[rand(0, 2)];

        # Create instance of RPS class for game logic
        $game = new RPS($playerMove, $computerMove);

        # Call RPS method playGame to get win, loss, or tie
        $result = $game->playGame();

        # Save results to the database
        # Set up a round
        $data = [
                'player_move' => $playerMove,
                'computer_move' => $computerMove,
                'result' => $result,
                'time' =>date('Y-m-d H:i:s'),
                'name' => $playerName
            ];

        # Insert the round
        $this->app->db()->insert('rounds', $data);

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
