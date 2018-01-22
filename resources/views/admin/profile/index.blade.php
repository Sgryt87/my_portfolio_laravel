@extends ('admin.template')
@section ('content')
    <h2 class="text-center">My Profile</h2>
    {!! Form::open(['action' => ['ProfileController@update', $profile->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', $profile->name, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', $profile->email, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'New Password') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('password_confirmation', 'Confirm New Password') }}
        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
