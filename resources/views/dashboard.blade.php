@extends('layout')
@section('content')
  <h1>Welcome to Dashboard Page !! </h1>
  <a href="{{route('logout')}}" class="text-success">Logout</a>
@endsection