@extends('templates.master')

@section('title')
Game History
@endsection

@section('content')
<h2>Game History</h2>

<ul>
    @foreach($rounds as $round)
    <li><a href='/round?id={{ $round['id'] }}'>Round {{ $round['id'] }}: {{$round['time']}}</li>
    @endforeach
</ul>
<div class="routing"><a href="/">Play again...</a></div>

@endsection
