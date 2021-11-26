@extends('layout')
@section ("content")
<div class="container custom-login ">
    <div class="row">
    <div class="col-md-8 offset-md-3">
    <div class="trending-wrapper">
        <h3>My orders:</h3>
       
        @foreach ($orders as $item)
        <div class="searched-item">
        <img class="trending-image" src="{{$item->gallery}}"  width="200px">
        <div class="">
        <h6>{{$item->name}}</h6>
        <p>{{$item->descreption}}</p>  
</div>
</div>
    @endforeach
</div>
</div>
</div>
@endsection