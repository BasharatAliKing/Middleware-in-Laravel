@extends('layout');
@section('content')
  <h2>Hello from Admin Page!!</h2>
  <a href="{{route('logout')}}">Logout</a>
@endsection