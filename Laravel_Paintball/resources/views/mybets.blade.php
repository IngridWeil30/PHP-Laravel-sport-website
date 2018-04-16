@extends('default')
@section('content')
    <h2>Your Bets</h2>

    <table class="table table-responsive table-dark">
        <tr>
            <td>Team 1</td>
            <td>Team 2</td>
            <td>Your estimated winner</td>
            <td>Money spent</td>

        </tr>

        @foreach($bets as $bet)
            <tr>
                <td>{{ $matches[$bet->match_id]->team1 }}</td>
                <td>{{ $teams[$matches[$bet->match_id]->team2] }}</td>
                <td>{{ $teams[$bet->winner] }}</td>
                <td>{{$bet->sum}}</td>
                @if($matches[$bet->match_id]['matchStatus'] == 1)
                    <td> Already played</td>
                @else
                    <td> To come</td>
                @endif
            </tr>
        @endforeach

    </table>
@endsection