@extends('layout')
@section('content')
<div class="col-md-4 m-5">
    <h1>Login Authenticaitons ! </h1>
    <a href="{{route('login')}}" class="btn btn-sm btn-primary">Login</a> | 
    <a href="{{route('register.view')}}" class="btn btn-sm btn-success">Register</a>
</div>
@endsection