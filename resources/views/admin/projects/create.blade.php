@extends ('admin.template')
@section('content')
    <h2 class="text-center">Create Project</h2>
    {!! Form::open(['action' => 'ProjectsController@store', 'method' => 'POST', 'enctype' =>
    'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('url', 'Url') }}
        {{ Form::text('url', '', ['class' => 'form-control', 'placeholder' => 'Url']) }}
    </div>
    <div class="form-group">
        {{ Form::file('image') }}
    </div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection