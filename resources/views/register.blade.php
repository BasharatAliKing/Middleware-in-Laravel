@extends('layout')
@section('content')
    <div class="col-md-4 m-5 p-4 border">
        <h3>Register</h3>
        <form action="{{route('register')}}" method="POST" >
            @csrf
            <div class="mb-1">
                <label for="">Name:</label>
                <input type="text" name="name" class="form-control mt-1 @error('name') is-invalid @enderror">
                @error('name') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="mb-1">
                <label for="">Email:</label>
                <input type="text" name="email" class="form-control mt-1 @error('email') is-invalid @enderror">
                @error('email') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="mb-1">
                <label for="">Password:</label>
                <input type="password" name="password" class="form-control mt-1 @error('password') is-invalid @enderror">
                @error('password') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="mb-1">
                <label for="">Confirm Password:</label>
                <input type="password" name="password_confirmation" class="form-control mt-1 @error('password') is-invalid @enderror">
                @error('password') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <button class="btn btn-sm btn-success mt-2">Submit</button>
        </form>
    </div>
@endsection