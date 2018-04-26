@extends('default')
@section('content')
    <div id="container">
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
                {{$bet}}
                <td>{{  }}</td>
                <td>{{  }}</td>
                <td>{{  }}</td>
                <td>{{$bet->sum}}</td>
                @if( 0 === 0)
                    <td> Already played</td>
                @else
                    <td> To come</td>
                @endif
            </tr>
        @endforeach

    </table>
    </div>
@endsection