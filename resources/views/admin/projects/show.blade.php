@extends('admin.template')
@section('content')
    <h3>{{$project->title}}</h3>
    <br>
    <a href="{{$project->url}}">{{$project->url}}</a>
    <br>
    <br>
    <div><img class="img img-responsive" src="{{ asset('../storage/app/public/images/' .$project->image) }}"
               alt="{{$project->title}}"></div>

@endsection