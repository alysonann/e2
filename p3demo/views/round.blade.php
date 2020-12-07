@extends('templates.master')

@section('title')
Round Details
@endsection

@section('content')
<h2>Round Details</h2>
<ul>

    <li>Player move: {{$round['move']}}</li>
    <li>Results: {{$round['win'] == 1 ? 'Player won' : 'Player lost'}}</li>
    <li>Time: {{$round['time']}}</li>

</ul>

@endsection
