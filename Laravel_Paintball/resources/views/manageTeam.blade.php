@extends('default')
@section('content')
    <a href="/admin/match"><button type="button" class="btn btn-primary"><-Back</button></a><br>
    <br><table class="table table-responsive table-dark">
        <tr>
            <td>Name</td>
            <td>Number of players</td>
            <td>Country origin</td>
            <td>Coach</td>
            <td>Nb victories</td>
            <td>Total points</td>
            <td>Weapon</td>
            <td>Country flag</td>
            <td>Ranking</td>
        </tr>

        <tr>
            <td> {{ $team['name']}} </td>
            <td> {{ $team['nb_players']}}</td>
            <td> {{ $team['country_origin']}}</td>
            <td> {{ $team['coach']}}</td>
            <td> {{ $team['nb_victories']}}</td>
            <td> {{ $team['total_points']}}</td>
            <td> {{ $team['weapon']}}</td>
            <td> {{ $team['country_flag']}}</td>
            <td> {{ $team['ranking']}}</td>
        </tr>
    </table>

    <button id = "editTeam" class="btn btn-primary">Edit</button>


    {!! Form::open(['url' => route('editTeam', $team['id']), 'id' => 'formEditTeam']) !!}
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

    <button class="btn btn-primary">Send</button>
    {!! Form::close() !!}

    <br>

    {!!Form::open(['route' => ['deleteTeam', $team['id']]]) !!}
    <br><button id ="deleteTeam" class="btn btn-primary">Delete</button>
    {!! Form::close() !!}

    <script>$("#formEditTeam").hide();
        $('#editTeam').on('click', function() {
            $('#formEditTeam').toggle();
        });
    </script>

@endsection