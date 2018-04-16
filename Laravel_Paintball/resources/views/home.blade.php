@extends('default')
@section('content')
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
            @endif
        </table>
        <div class="versus">
        <img src="https://splatoon.nintendo.com/splatoon/assets/img/inklings/intro-img-boy.png" height="250" alt="splatoon girl">
        <img src="https://www.champcueil.fr/wp-content/uploads/2016/02/Vs.png" height="150" width="150" alt="versus image">
        <img src="https://splatoon.nintendo.com/assets/img/home/game-modes-char.png" height="250" alt="splatoon boy">
        </div>
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
            @endif
        </table>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis imperdiet mauris metus, ut porttitor tortor faucibus ut. Duis id tortor eu quam rutrum pharetra in non ligula. Proin ornare lectus non dolor faucibus luctus. Nullam nec lacinia quam. Proin blandit vehicula ante quis mattis. Aliquam ut efficitur ante. Quisque ligula erat, sodales in euismod eget, consectetur id purus. Quisque euismod eu arcu sed semper. Vestibulum tempor ipsum eu sem placerat ornare. Pellentesque volutpat est mi, eget vulputate eros porta et. Donec sed hendrerit mi. Sed feugiat molestie elit, non tristique quam porta a.

            Suspendisse potenti. Pellentesque eget lorem id nulla placerat placerat suscipit et nisl. Maecenas faucibus pulvinar est. Aliquam consequat ut dolor nec condimentum. In at dapibus lacus. Quisque molestie mattis ante eget tincidunt. Curabitur vitae condimentum tellus. Morbi convallis eget risus quis lobortis.</p>
    </div>
    </body>
    </html>
@endsection