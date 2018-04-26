@extends('default')
@section('content')
    <a href="/admin/match"><button type="button" class="btn btn-primary"><-Back</button></a><br>
    <br><table class="table table-responsive table-dark">
            <tr>
                <td>Match ID</td>
                <td>Team 1</td>
                <td>Team 2</td>
                <td>Winner</td>
                <td>Final score Team 1</td>
                <td>Final score Team 2</td>
                <td>City</td>
                <td>Description</td>
                <td>Status</td>
            </tr>

            <tr>
                <td> {{ $match['id']}} </td>
                <td> {{ $teams[$match['team1']]}} </td>
                <td> {{ $teams[$match['team2']]}} </td>
                <td> {{ $teams[$match['winner']]}} </td>
                <td> {{ $match['scoreTeam1']}} </td>
                <td> {{ $match['scoreTeam2']}} </td>
                <td> {{ $match['city']}} </td>
                <td> {{ $match['description']}} </td>
                @if($match['matchStatus'] == 1)
                <td> Already played </td>
                @else
                    <td> To come </td>
                @endif
            </tr>
        </table>

    <button id = "editMatch" class="btn btn-primary">Edit</button>


    {!! Form::open(['url' => route('editMatch', $match['id']), 'id' => 'formEditMatch']) !!}
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
        {!! Form::number('scoreTeam1', $match['scoreTeam1'], ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('scoreTeam2', 'Score team 2') !!}
        {!! Form::number('scoreTeam2', $match['scoreTeam2'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', 'City') !!}
        {!! Form::text('city', $match['city'] ,  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', $match['description'],  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('matchStatus', 'Match Status') !!}
        {!! Form::select('matchStatus', [0 => 'To come', 1 => 'Done'], $match['matchStatus']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('winner', 'Winner') !!}
        {!! Form::select('winner', $teams, $match['winner']) !!}
    </div>

    <button class="btn btn-primary">Send</button>
    {!! Form::close() !!}

    <br>

    {!! Form::open(['route' => ['deleteMatch', $match['id']]]) !!}
    <br><button id ="deleteMatch" class="btn btn-primary">Delete</button>
    {!! Form::close() !!}

    <script>$("#formEditMatch").hide();
        $('#editMatch').on('click', function() {
            $('#formEditMatch').toggle();
        });
    </script>

@endsection