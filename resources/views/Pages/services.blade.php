@extends('Layout.app')

@section('content')
<h1>{{$title}}</h1>
<ul class="list-group">
    @foreach ($services as $item)
        <li class="list-group-item">{{$item}}</li>
    @endforeach
</ul>

@endsection
 