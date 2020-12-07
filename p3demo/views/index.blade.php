@extends('templates.master')

@section('title')
Heads or Tails
@endsection

@section('content')
<form method='POST' action="/play">

    <h2>Instructions</h2>
    <p>Choose a side, heads or tails. If the coin lands on your side, you win!</p>
    <label>
        <input type='radio' name='move' value='heads'>
        Heads
    </label>

    <label>
        <input type='radio' name='move' value='tails'>
        Tails
    </label>
    <button type="submit">Flip</button>

    @if($app->errorsExist())
    <ul class="error alert alert-danger">
        @foreach($app->errors() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif



</form>

@if($results)
<div class='{{ $results['win'] ? 'won' : 'lost' }}'>
    <p>The coin landed on {{ $results['flip'] }}</p>

    @if($results['win'])
    You won!
    @else
    You lost!
    @endif
</div>
@endif

<a href="/history">Game history...</a>

@endsection
