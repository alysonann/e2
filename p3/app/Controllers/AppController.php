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
        dump($results);
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
        dump($id);

        $round = $this->app->db()->findById('rounds', $id);
        //dump($round);
        return $this->app->view('round', [
            'round' => $round
        ]);
    }

    public function play()
    {
        $this->app->validate([
            'move' => 'required'
        ]);
        $move = $this->app->input('move');
        # Save results to the database
        $moves = ['heads','tails'];
        $flip = $moves[rand(0, 1)];
        $win = $move == $flip;
        // dump($choice);
        // dump($flip);
        // dump($winner);

        $data = [
            'move' => $move,
            'win'  => $win ? 1 : 0, # Convert the win value of "true" or "false" to the numberic value of 1 or 0
            'time'=> date('Y-m-d H:i:s')
        ];

        $this->app->db()->insert('rounds', $data);

        # Redirect the user back to the home page with the form to play again

        $this->app->redirect('/', [
                'results'=> [
                'move' => $move,
                'win' => $win,
                'flip' => $flip
            ]
            
        ]);
        //dump($data);
    }
}