@extends('templates.master')

@section('title')
<h2>Round Details</h2>

@endsection

@section('content')
<h2>Round Details</h2>

<ul>

    <li>{{$round['name']}}'s move: {{ $round['player_move'] }}.</li>
    <li>Computer's move: {{ $round['computer_move'] }}.</li>
    <li>Result:
        @if($round['result'] == "tie")
        It's a tie!
        @elseif($round['result']=="win")
        {{$round['name']}} wins!
        @else
        The computer wins!
    </li>
    @endif

    <li>Time: {{$round['time']}}</li>

</ul>
<p><a href="/history">Back to game history...</a></p>
<p><a href="/">Play again...</a></p>

@endsection
