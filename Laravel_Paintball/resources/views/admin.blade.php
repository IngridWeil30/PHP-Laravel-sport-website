@extends('default')


@section('content')


    <h2>Add an upcoming match</h2>
    <button type="button" id="go" class="btn btn-primary">Add match</button><br>

    {!! Form::open(['url' => 'admin/addMatch', 'id' =>'form']) !!}
    <br><div class="form-group">
        {!! Form::label('team1', 'Team 1') !!}
        {!! Form::select('team1', $teams) !!}
    </div>
    <div class="form-group">
        {!! Form::label('team2', 'Team 2') !!}
        {!! Form::select('team2', $teams) !!}
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
    <div class="form-group">
        {!! Form::label('winner', 'Winner') !!}
        {!! Form::select('winner', $teams) !!}
    </div>

        <button class="btn btn-primary">Send</button>
    {!! Form::close() !!}

    <script>$("#form").hide();
        $('#go').on('click', function() {
            $('#form').toggle();
        });</script>

@endsection