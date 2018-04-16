@extends('default')
@section('content')
    @include('flash')

    <table class="table table-responsive table-dark">
        <tr>
            <td>Team 1</td>
            <td>Team 2</td>
            <td>City</td>
            <td>Description</td>
            <td>Cash Prize</td>
            <td>Odds {{ $teams[$match->team1] }}</td>
            <td>Odds {{ $teams[$match->team2] }}</td>



        </tr>
        <tr>
            <td>{{ $teams[$match->team1] }}</td>
            <td>{{ $teams[$match->team2] }}</td>
            <td>{{$match->city}}</td>
            <td>{{$match->description}}</td>
            <td>${{$match->cashPrize}}</td>
            <td>{{$match->oddsTeam1}} to 1</td>
            <td>{{$match->oddsTeam2}} to 1</td>
    </table>


    {!! Form::open(['url' => route('makeBet', $match->id), 'id' => 'formMakeBet']) !!}
    <br><h2>Make a bet</h2>
    <div class="form-group">
        {!! Form::label('winner_id', 'Choose you team :  ') !!}
        {!! Form::label('winner_id', $teams[$match['team1']]) !!}
        {!! Form::radio('winner_id', $match['team1'], true) !!}
        {!! Form::label('winner_id', $teams[$match['team2']]) !!}
        {!! Form::radio('winner_id', $match['team2']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('sum', 'How much do you want to bet ?') !!}
        {!! Form::number('sum', "0", ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    <button class="btn btn-primary" id="makeBet ">Send</button>
    {!! Form::close() !!}

    <br>

@endsection