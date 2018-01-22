@extends('admin.template')
@section('content')
    <div class="header">
        <h1 class="title">Search:</h1>
    </div>
    {!! Form::open() !!}
    <div class="form-group">
        {{ Form::text('find', '', ['class' => 'form-control', 'placeholder' => 'search', 'id' => 'find']) }}
    </div>
    {!! Form::close() !!}

    <div class="card">
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Url</th>
                <th>Image</th>
                <th>Created</th>
                <th>Updated</th>
                </thead>
                <tbody id="searchBody">
                </tbody>
            </table>

        </div>
    </div>
@endsection