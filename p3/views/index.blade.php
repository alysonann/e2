@extends('templates.master')

@section('title')

@endsection

@section('content')
<div>Play against the computer! (DGMD E-2 by Alyson Lynch) </div>


<h2>Instructions</h2>
<ul>
    <li>Pick your "throw": rock, paper, or scissors. Also, enter your name if you wish!</li>
    <li>The computer will choose a "throw" at the same time, and we'll see who wins!</li>
    <li>If you throw the same thing, it's a tie!</li>
    <li>Otherwise: rock beats scissors, scissors beats paper, and paper beats rock.</li>
</ul>
<h2>Play</h2>
<form method="POST" action='/play'>
    <div class="inputs">
        <label for="playerName">Player name:</label>
        <input type="text" name="playerName" id="playerName" value="Player"></div>
    <div class="inputs">
        <input type="radio" name="choice" value="rock" id="rock">
        <label for="rock"><i class="fas fa-hand-rock"></i>rock</label>
    </div>
    <div class="inputs"><input type="radio" name="choice" value="paper" id="paper">
        <label for="paper"><i class="fas fa-hand-paper"></i>paper</label></div>
    <div class="inputs"><input type="radio" name="choice" value="scissors" id="scissors">
        <label for="scissors"><i class="fas fa-hand-scissors"></i>scissors</label></div>
    <button class="myButton" type="submit">THROW</button>

    @if($app->errorsExist())
    <ul class="error alert alert-danger">
        @foreach($app->errors() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</form>
@if($results)
<div id="results">
    <h3>Results</h3>
    <ul>
        <li>{{ $results['name'] }} threw {{ $results['player_move'] }}.</li>
        <li>The computer threw {{ $results['computer_move'] }}.</li>
        @if($results['result'] == "tie")
        <li>It's a tie!</li>
        @elseif($results['result']=="win")
        <li>{{$results['name']}} wins!</li>
        @else
        <li>The computer wins!</li>
        @endif
    </ul>
</div>

@else <h3 id="instructions">Make a selection and click THROW!</h3>
@endif
<div class="routing"><a href="/history">See game history...</a></div>

@endsection
