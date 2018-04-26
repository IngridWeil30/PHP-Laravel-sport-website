@extends('default')
@section('content')
    @include('flash')
    <html lang='fr'>
    <head>
        <title>Space Paintball - Home</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

    </head>
    <body>
   <!-- <img class="logo" src="http://www.paintballstation10.fr/wpimages/wp2b7e99f0_06.png" alt="logo Paintball">-->
    <div id="container">
        {{-- PERMET D'AFFICHER EN FONCTION DE LA LANGUE CHOISIR EN URL (EN ou FR)--}}
        <h1>@lang('welcome.success')</h1>
        <h2>Upcoming game : <?php echo "Today " . date("Y-m-d");?> - 8pm</h2>
{{--            <table class="table table-responsive table-dark">
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
                @endif
            </table>--}}

        <table class="table table-responsive table-dark">
            <tr>
                <td>Team name</td>
                <td>Number of players</td>
                <td>Country origin</td>
                <td>Coach</td>
                <td>Number of victories</td>
                <td>Total points</td>
                <td>Weapon</td>
            </tr>

            @if(isset($team1->id))
                <tr>
                    <td>{{$team1->name}}</td>
                    <td>{{$team1->nb_players}}</td>
                    <td>{{$team1->country_origin}}</td>
                    <td>{{$team1->coach}}</td>
                    <td>{{$team1->nb_victories}}</td>
                    <td>{{$team1->total_points}}</td>
                    <td>{{$team1->weapon}}</td>
                </tr>
            @endif
        </table>
        <div class="versus">
        <img src="https://splatoon.nintendo.com/splatoon/assets/img/inklings/intro-img-boy.png" height="250" alt="splatoon girl">
        <img src="https://www.champcueil.fr/wp-content/uploads/2016/02/Vs.png" height="150" width="150" alt="versus image">
        <img src="https://splatoon.nintendo.com/assets/img/home/game-modes-char.png" height="250" alt="splatoon boy">
        </div>
        <table class="table table-responsive table-dark">
            <tr>
                <td>Team name</td>
                <td>Number of players</td>
                <td>Country origin</td>
                <td>Coach</td>
                <td>Number of victories</td>
                <td>Total points</td>
                <td>Weapon</td>
            </tr>

            @if(isset($team2->id))
                <tr>
                    <td>{{$team2->name}}</td>
                    <td>{{$team2->nb_players}}</td>
                    <td>{{$team2->country_origin}}</td>
                    <td>{{$team2->coach}}</td>
                    <td>{{$team2->nb_victories}}</td>
                    <td>{{$team2->total_points}}</td>
                    <td>{{$team2->weapon}}</td>
                </tr>
            @endif
        </table>
        <p class="quote"><b>Daily quote : </b><br>
            <i>“As an Terrian competing at the Paintball Station, I truly believe athletes have a crucial role to play to inspire the next generation, especially those who share a passion for paintball, as this sport can unite the world, breaking down barriers and having a positive impact on society,”<br> - Bruce Waterpaint, Team leader of the American team.</i></p>
    </div>
    </body>
    </html>
@endsection
