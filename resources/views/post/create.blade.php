@extends('Layout.app')

@section('content')
    <div>
        <h1>Create Post</h1>
        {!! Form::open(['action'=> 'PostsController@store' , 'method' =>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title' , '', ['class' => 'form-control' , 'Placeholder' =>'Title'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::textarea('body' , '', ['id' =>'article-ckeditor','class' => 'form-control' , 'Placeholder' =>'Body'])}}
                </div>
                {{Form::submit('Submit',['class'=>'btn btn-sucess'])}}
        {!! Form::close() !!}
    </div>
   
@endsection