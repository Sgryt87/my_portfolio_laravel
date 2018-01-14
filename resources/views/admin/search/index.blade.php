@extends('admin.template')
@section('content')
    {!! Form::open() !!}
    <div class="form-group">
        {{ Form::text('find', '', ['class' => 'form-control', 'placeholder' => 'search']) }}
    </div>
    {!! Form::close() !!}
@endsection