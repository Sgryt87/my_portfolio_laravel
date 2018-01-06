@extends('admin.template')
@section('content')
    <h2 class="text-center">Create Project</h2>
    {!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $project->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('url', 'Url') }}
        {{ Form::text('url', $project->url, ['class' => 'form-control', 'placeholder' => 'Url']) }}
    </div>
    <div class="form-group">
        <img src="{{ asset('../storage/app/public/images/' .$project->image) }}" alt="{{$project->title}}" class="img img-responsive">
        {{ Form::file('image') }}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection