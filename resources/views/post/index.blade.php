@extends('Layout.app')
@section('content')
    <div>
        <h1>Post</h1>
            @if (count($posts)>=0)
                @foreach ($posts as $post)
                <div class="card">
                        <div class="card-body">
                                <h3><a href="/post/{{$post->id}}">{{$post->title}}</a></h3>
                        <small> Written On {{$post->created_at}} By <span class="badge badge-primary">{{ $post->user->name}}</span></small>
                        </div>
                      </div>
                @endforeach
                <div class="text-center">
                {{$posts->links()}}
                </div>
            @else 

                <p class="button-error"> Post not Found</p>
            @endif
    </div>
   
@endsection