@extends('templates.master')

@section('title')
<h2>{{$product['name']}}</h2>

@endsection

@section('content')
<div id="product-show">
    <h2>{{$product['name']}}</h2>
    <img src="/images/products/{{$product["id"]}}.jpg" class="product-image">
    <p class="product-description">
        {{$product["description"]}}
    </p>
    <div class="product-price">${{$product["price"]}}</div>

    <a href="/products">&larr; Return to all products</a>
    @endsection
