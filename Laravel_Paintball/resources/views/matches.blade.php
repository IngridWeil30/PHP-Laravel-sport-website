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

            @if(isset($matches->id))
                <tr>
                <td>{{$matches->id}}</td>
                <td>{{$matches->team1}}</td>
                <td>{{$matches->team2}}</td>
                <td>{{$matches->winner}}</td>
                <td>{{$matches->scoreTeam1}}</td>
                <td>{{$matches->scoreTeam2}}</td>
                <td>{{$matches->city}}</td>
                <td>{{$matches->description}}</td>
                <td>{{$matches->matchStatus}}</td>
                </tr>
                    @else
                @foreach($matches as $match)
            <tr>
                    <td>{{$match->id}}</td>
                    <td>{{$match->team1}}</td>
                    <td>{{$match->team2}}</td>
                    <td>{{$match->winner}}</td>
                    <td>{{$match->scoreTeam1}}</td>
                    <td>{{$match->scoreTeam2}}</td>
                    <td>{{$match->city}}</td>
                    <td>{{$match->description}}</td>
                    <td>{{$match->matchStatus}}</td>
            </tr>
                @endforeach
            @endif

    </table>
@endsection