@extends('default')

@section('content')
    <p>Matches Table</p>

<p>Status : {{$matches->matchStatus}}.</p>
<p>Team ID {{$matches->id}} T1 {{$matches->team1}} VS T2 {{$matches->team2}} in {{$matches->city}} city.</p>
<p>Match description {{$matches->description}}.</p>
<p>Placement {{$matches->placement}}.</p>
<p>Winner is {{$matches->winner}}, final score T1 is {{$matches->scoreTeam1}} and T2 is {{$matches->scoreTeam2}}.</p>
@endsection