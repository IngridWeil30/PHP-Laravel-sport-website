@extends('default')
@section('content')
    <h2>Matches Table</h2>
        <table class="table table-responsive table-dark">
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
                <td>{{$matches->id}}</td>
                <td>{{$matches->team1}}</td>
                <td>{{$matches->team2}}</td>
                <td>{{$matches->winner}}</td>
                <td>{{$matches->scoreTeam1}}</td>
                <td>{{$matches->scoreTeam2}}</td>
                <td>{{$matches->city}}</td>
                <td>{{$matches->description}}</td>
                <td>{{$matches->matchStatus}}</td>
        </table>
@endsection