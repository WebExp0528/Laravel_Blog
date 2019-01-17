@extends('layout.app')

@section('content')
<div >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/post/create" class="btn btn-primary m-md-2">Add Post</a>

                    <h3 class="">Your Blog Post</h3>
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">Title</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                     <tr>
                                        
                                        <td>{{$post->title}}</td>
                                        <td> <a href="/post/{{$post->id}}/edit" class="btn btn-info btn-block">Edit</a></td>
                                        <td>{!! Form::open(['action'=> ['PostsController@destroy', $post->id ] , 'method' =>'POST' , 'class'=>'float-right']) !!}
                                            {{Form::hidden('_method','DELETE')}}    
                                            {{Form::submit('Delete',['class'=>'btn btn-danger btn-block'])}}
                                        {!! Form::close() !!}</td>
                                      </tr>
                                @endforeach
                             
                             
                            </tbody>
                          </table>
                  {{-- @include('inc.dashboard') --}}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
