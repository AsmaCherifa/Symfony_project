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
  <a href= "{{route('livre.create')}}">add</a>
  <table class="table is-hoverable">
  <tr>
  <th> id</th>
  <th> titre</th>
  <th> auteur</th>
  <th> prix</th>
  <th> Update</th>
  <th>Delete</th>
  </tr>
  @foreach($livres as $livre)
  <tr>
  <td>{{ $livre->id }}</td>
  <td>{{ $livre->titre }}</td>
  <td>{{ $livre->auteur }} </td>
  <td>{{ $livre->prix }}</td>
  <td><a href="{{route('livre.edit',$livre->id)}}">Update</a></td>
  
  <td> 
    <form action="{{route('livre.destroy',$livre->id)}}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="delete">
  
    </form>
  </tr>
  @endforeach
  </div>
  </main>
  </body>
  </html>
@endsection
