@extends('Layout.app')

@section('content')
    <div >
                <div class="card">
                        <div class="card-body">
                                <h3>{{$post->title}}</h3>
                                <p>{!!$post->Content!!}</p>
                                <hr>
                        <small> Written On {{$post->created_at}}</small>
                        <hr>                        
                        </div>
                </div>
                <a href="/post" class="btn btn-warning mt-2">Go Back</a>
    </div>
   
@endsection