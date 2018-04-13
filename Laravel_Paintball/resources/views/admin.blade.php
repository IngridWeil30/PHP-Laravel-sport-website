@extends('default')
@section('content')


    <h2>Add an upcoming match</h2>
    <button type="button" id="addMatch" class="btn btn-primary">Add match</button><br>

    {!! Form::open(['url' => 'admin/addMatch', 'id' =>'form1']) !!}
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

    <script>$("#form1").hide();
        $('#addMatch').on('click', function() {
            $('#form1').toggle();
        });</script>


    <br>

    <h2>Add a team</h2>
    <button type="button" id="addTeam" class="btn btn-primary">Add team</button>

    {!! Form::open(['url' => 'admin/addTeam', 'id' =>'form2']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Team Name') !!}
        {!! Form::text('name', "Team Name" ,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nb_players', 'Number of players') !!}
        {!! Form::number('nb_players', 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('country_origin', 'Country origin') !!}
        {!! Form::select('country_origin', $country_origin) !!}
    </div>
    <div class="form-group">
        {!! Form::label('coach', 'Coach name') !!}
        {!! Form::text('coach', "coach" ,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nb_victories', 'Number of team victories') !!}
        {!! Form::number('nb_victories', 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('total_points', 'Total points of the team') !!}
        {!! Form::number('total_points', 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('weapon', 'Name of the team super-weapon') !!}
        {!! Form::text('weapon', "Weapon name" ,  ['class' => 'form-control']) !!}

    </div>
    <button class="btn btn-primary">Send</button>
    {!! Form::close() !!}
    <script>$("#form2").hide();
        $('#addTeam').on('click', function() {
            $('#form2').toggle();
        });</script>

@endsection
