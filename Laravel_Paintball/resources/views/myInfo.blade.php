@extends('default')

@section('content')
    @include('flash')
    <div id="container">
    <h2>Edit my Info</h2>
    {!! Form::open(['url' => route('editUser'), 'id' => 'formEditUser']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $user->name,  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', $user->email,  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    <button class="btn btn-primary">Send</button>
    {!! Form::close() !!}
    </div>
@endsection