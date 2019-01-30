@extends('Layout.app')
@section('content')
<div class="text-center">

    <h1 class="display-1">{{$title}}</h1>
    <p>Welcome To <span class="badge badge-success">MyGirl.com</span>!!</p>
    <div class="">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-success">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class = "btn btn-success">Login</a>
                        <a href="{{ route('register') }}" class = "btn btn-primary">Register</a>
                    @endauth
                </div>
            @endif
        </div>
</div>
@endsection
