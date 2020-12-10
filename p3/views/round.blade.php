@extends('templates.master')

@section('title')
Round Details

@endsection

@section('content')
<h2>Round Details</h2>

<ul>

    <li>{{$round['name']}}'s move: {{ $round['player_move'] }}.</li>
    <li>The computer's move: {{ $round['computer_move'] }}.</li>
    <li>Result:
        @if($round['result'] == "tie")
        It's a tie!
        @elseif($round['result']=="win")
        {{$round['name']}} wins!
        @else
        The computer wins!
        @endif
    </li>

    <li>Time: {{$round['time']}}</li>

</ul>
<div class="routing">
    <p><a href="/history">Back to game history...</a></p>
    <p><a href="/">Play again...</a></p>
</div>

@endsection
