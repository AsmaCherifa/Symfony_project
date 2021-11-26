@extends('layout')
@section ("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="detail-img" src="{{$product['gallery']}}" alt="">
</div>
<div class="col-sm-6">
<a href="/">Go Back</a>
<h2>{{$product['name']}}</h2>
<h4>Price:{{$product['price']}}</h4>
<h5>Category:{{$product['category']}}</h5>
<h6>Descreption:{{$product['descreption']}}</h6>
<br><br>
<form  action="{{url('addToCart')}}" method="get">
@csrf
<input type="hidden" name="product_id" value ="{{$product['id']}}">
<button class="btn btn-primary" >Add to Cart</button>
</form>
</div>
</div>
</div>
@endsection