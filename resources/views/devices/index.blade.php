@extends('layout')
@section('title','index page')
@section('content')
<main class="section">
  <div class="container">
      @if (session()->has("info"))
      <div class="notification">
          {{session ("info")}}
      </div>
      @endif

  <table class="table is-hoverable">
  <tr>
  <th> Gallery</th>
  <th> Name</th>
  <th> Category</th>
  <th>Details</th>
  <th></th>
  </tr>
  @foreach($devices as $device)
  <tr>
  <td><img class="trending-image" src="{{$device['gallery']}}" class="d-block w-100" alt="..."></td>
  <td>{{ $device->name }}</td>
  <td>{{ $device->category }}</td>
  <td><a class="btn btn-primary" href="detailDevice/{{$device['id']}}">Check details</a></td>
  </tr>
  @endforeach
  </div>
  </main>
  </body>
  </html>
@endsection
