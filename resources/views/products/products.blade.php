
@extends('layout')
@section('title','products page')
@section('content')<div class="container custom-product ">
  
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item {{($item['id']==4?'active':'')}}">
        <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
        </a>
        <div class="carousel-caption d-none d-md-block">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['descreption']}}</p>
        </div>
      </div>
      @endforeach
    </div>
    <div class="trending-wrapper">
      <h3>Trending</h3>
      @foreach ($products as $item)
      <div class="trending-item">
      <a href="detail/{{$item['id']}}">
      <img class="trending-image" src="{{$item['gallery']}}" class="d-block w-100" alt="...">
      </a>
      <div class="">
      <h6>{{$item['name']}}</h6>
      </div>
      </div>
      @endforeach
    </div>
    </div>
@endsection
