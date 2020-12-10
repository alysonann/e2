@extends('templates.master')

@section('title')
404 Page Not Found
@endsection

@section('content')

<h2>404 Page Not Found</h2>
<div>Return to <a href='{{ $app->config('app.url') }}'>home page</a> to play Rock, Paper, Scissors.</div>
@endsection
