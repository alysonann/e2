@extends('templates.master')

@section('title')
All Products
{{$welcome}}
@endsection

@section('content')
<h2>Product {{$id}} not found.</h2>

<div>Uh oh—we were not able to find the product you were looking for.</div>
<a href='/products'>Check out our other products...</a>


</div>
@endsection
