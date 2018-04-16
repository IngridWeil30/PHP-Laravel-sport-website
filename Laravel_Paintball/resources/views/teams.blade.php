@extends('default')
@section('content')
    <h2>Teams Table</h2>



    <table class="table table-responsive table-dark">
        <tr>
            <td>Team ID</td>
            <td>Team name</td>
            <td>Number of players</td>
            <td>Country origin</td>
            <td>Coach</td>
            <td>Number of victories</td>
            <td>Total points</td>
            <td>Weapon</td>
        </tr>

        @if(isset($teams->id))
            <tr>
                <td>{{$teams->id}}</td>
                <td>{{$teams->name}}</td>
                <td>{{$teams->nb_players}}</td>
                <td>{{$teams->country_origin}}</td>
                <td>{{$teams->coach}}</td>
                <td>{{$teams->nb_victories}}</td>
                <td>{{$teams->total_points}}</td>
                <td>{{$teams->weapon}}</td>
            </tr>
        @else
            @foreach($teams as $team)
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->name}}</td>
                    <td>{{$team->nb_players}}</td>
                    <td>{{$team->country_origin}}</td>
                    <td>{{$team->coach}}</td>
                    <td>{{$team->nb_victories}}</td>
                    <td>{{$team->total_points}}</td>
                    <td>{{$team->weapon}}</td>
                </tr>
            @endforeach
        @endif

    </table>
@endsection