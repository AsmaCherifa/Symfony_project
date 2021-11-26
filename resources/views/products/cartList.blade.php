@extends('layout')
@section ("content")
<div class="container custom-login ">
    <div class="row">
    <div class="col-md-8 offset-md-3">
    <div class="trending-wrapper">
        <h3>Results:</h3>
        <a href="/order"  class="btn btn-success" >Order Now</a>
        @foreach ($products as $item)
        <div class="searched-item">
        <img class="trending-image" src="{{$item->gallery}}"  width="200px">
        <div class="">
        <h6>{{$item->name}}</h6>
        <p>{{$item->descreption}}</p>  
        <a href="removeFromCart/{{$item->id}}"  class="btn btn-warning" >Remove from cart</a>
</div>
</div>
    @endforeach
    @foreach ($devices as $item)
    <div class="searched-item">
    <img class="trending-image" src="{{$item->gallery}}"  width="200px">
    <div class="">
    <h6>{{$item->name}}</h6>
    <p>{{$item->descreption}}</p>  
    <a href="removeFromCart/{{$item->id}}"  class="btn btn-warning" >Remove from cart</a>
</div>
</div>
@endforeach
</div>
</div>
</div>
@endsection