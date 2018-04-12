@extends('default')

@section('content')

    <h2>Add an upcoming match</h2>
    <button type="button" class="btn btn-primary">Add match</button>

    {!! Form::open(['url' => 'admin/addMatch']) !!}
    <div class="form-group">
        {!! Form::label('team1', 'Team 1') !!}
        {!! Form::select('team1') !!}
    </div>
    <div class="form-group">
        {!! Form::label('team1', 'Team 2') !!}
        {!! Form::select('team2') !!}
    </div>
    <div class="form-group">
        {!! Form::label('scoreTeam1', 'Score team 1') !!}
        {!! Form::number('scoreTeam1', 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('scoreTeam2', 'Score team 2') !!}
        {!! Form::number('scoreTeam2', 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', 'City') !!}
        {!! Form::text('city', "City" ,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', "Description",  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('matchStatus', 'Match Status') !!}
        {!! Form::select('matchStatus', [0 => 'To come', 1 => 'Done']) !!}

    </div>
        <button class="btn btn-primary">Send</button>
    {!! Form::close() !!}


@endsection