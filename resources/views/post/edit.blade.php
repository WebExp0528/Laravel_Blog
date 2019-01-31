@extends('Layout.app')

@section('content')
    <div >
        <h1>Edit Post</h1>
        {!! Form::open(['action'=> ['PostsController@update',$post->id] , 'method' =>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title' , $post->title, ['class' => 'form-control' , 'Placeholder' =>'Title'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::textarea('body' , $post->Content , ['id' =>'article-ckeditor', 'class' => 'form-control' , 'Placeholder' =>'Body'])}}
                </div>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit',['class'=>'btn btn-sucess'])}}
        {!! Form::close() !!}
    </div>
   
@endsection