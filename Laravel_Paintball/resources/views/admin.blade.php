@extends('default')
@section('content')
    @include('flash')

    @if(isset($message))
        <div class="alert alert-warning">
        {!! $message !!}
        </div>
    @endif


    <button type="button" id="addPlayer" class="btn btn-primary">Add player</button><br>

    {!! Form::open(['url' => 'admin/addPlayer', 'id' =>'formAddPlayer']) !!}
    <br><h2>Add a player</h2>
    <div class="form-group">
        {!! Form::label('name', 'Player name') !!}
        {!! Form::text('name', "Player name" ,  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nickname', 'Nickname') !!}
        {!! Form::text('nickname', "Nickname" ,  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('age', 'Age') !!}
        {!! Form::number('age', 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('team_id', 'Team ID') !!}
        {!! Form::number('team_id', 0, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    <button class="btn btn-success">Send</button>
    {!! Form::close() !!}

    <br>


    <button type="button" id="addMatch" class="btn btn-primary">Add match</button><br>

    {!! Form::open(['url' => 'admin/addMatch', 'id' =>'formAddMatch']) !!}
    <br><h2>Add an upcoming match</h2>
    <div class="form-group">
        {!! Form::label('team1', 'Team 1') !!}
        {!! Form::select('team1', $teams) !!}
    </div>
    <div class="form-group">
        {!! Form::label('team2', 'Team 2') !!}
        {!! Form::select('team2', $teams) !!}
    </div>
    <div class="form-group">
        {!! Form::label('scoreTeam1', 'Score team 1') !!}
        {!! Form::number('scoreTeam1', 0, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('scoreTeam2', 'Score team 2') !!}
        {!! Form::number('scoreTeam2', 0, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', 'City') !!}
        {!! Form::text('city', "City" ,  ['class' => 'form-control', 'required' => 'required']) !!}
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

        <button class="btn btn-success">Send</button>
    {!! Form::close() !!}

    <br>

    <button type="button" id="addUser" class="btn btn-primary">Add User</button><br>

    {!! Form::open(['url' => route('addUser'), 'id' =>'formAddUser']) !!}
    <br><h2>Add a new user</h2>
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', 'name',  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', 'email',  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_admin', 'Level of authorization') !!}
        {!! Form::text('is_admin', "user or admin",  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    <button class="btn btn-success">Send</button>
    {!! Form::close() !!}

    <br>

    <button type="button" id="findMatch" class="btn btn-primary">Find match and manage</button>

    {!! Form::open(['url' => 'admin/findMatch', 'id' =>'formFindMatch']) !!}
    <br><h2>Find a match</h2>
    <div class="form-group">
        {!! Form::label('team1', 'Team 1') !!}
        {!! Form::select('team1', $teams) !!}
    </div>
    <div class="form-group">
        {!! Form::label('team2', 'Team 2') !!}
        {!! Form::select('team2', $teams) !!}
    </div>
    <button class="btn btn-success">Find</button>

    {!! Form::close() !!}

    <br>

    <br><button type="button" id="findUser" class="btn btn-primary">Find user and manage</button>

    {!! Form::open(['url' => route('findUser'), 'id' =>'formFindUser']) !!}
    <br><h2>Find a User</h2>
    <div class="form-group">
        {!! Form::label('email', 'User email') !!}
        {!! Form::text('email', "email",  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <button class="btn btn-success">Find</button>

    {!! Form::close() !!}

    <br>

    <br><button type="button" id="addTeam" class="btn btn-primary">Add team</button>


    {!! Form::open(['url' => 'admin/addTeam', 'id' => 'formAddTeam']) !!}
    <br><h2>Add a team</h2>
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
        {!! Form::text('country_origin', "Country origin", ['class' => 'form-control']) !!}

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
    <div class="form-group">
        {!! Form::label('country_flag', 'Country flag') !!}
        {!! Form::text('country_flag', "Country flag" ,  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ranking', 'Ranking') !!}
        {!! Form::number('ranking', 0, ['class' => 'form-control']) !!}
    </div>
    <button class="btn btn-success">Send</button>
    {!! Form::close() !!}

    <script>$("#formAddMatch").hide();
        $('#addMatch').on('click', function() {
            $('#formAddMatch').toggle();
        });
        $("#formFindMatch").hide();
        $('#findMatch').on('click', function() {
            $('#formFindMatch').toggle();
        });
        $("#formAddTeam").hide();
        $('#addTeam').on('click', function() {
            $('#formAddTeam').toggle();
        });
        $("#formAddPlayer").hide();
        $('#addPlayer').on('click', function() {
            $('#formAddPlayer').toggle();
        });
        $("#formAddUser").hide();
        $('#addUser').on('click', function() {
            $('#formAddUser').toggle();
        });
        $("#formFindUser").hide();
        $('#findUser').on('click', function() {
            $('#formFindUser').toggle();
        })
    </script>

@endsection