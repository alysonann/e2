@extends('templates.master')

@section('title')
<title>404 Page Not Found</title>
<meta charset='utf-8'>
@endsection

@section('content')

<h2>404 Page Not Found</h2>
<p>Return to homepage to play Rock, Paper, Scissors: <a href='{{ $app->config('app.url') }}'>home</a>.</p>
@endsection
