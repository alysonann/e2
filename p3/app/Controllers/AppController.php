<?php
namespace App\Controllers;

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
            'player'=>'required'
        ]);

        $playerMove = $this->app->input('player');
        $playerName = $this->app->input('playerName');


        $choices = ['rock','paper','scissors'];
        $computerMove = $choices[rand(0, 2)];

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