@extends('default')
@section('content')
    @include('flash')
    <html lang='en'>
    <head>
        <title>Space Paintball - Managing my user account</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>
    <!-- <img class="logo" src="http://www.paintballstation10.fr/wpimages/wp2b7e99f0_06.png" alt="logo Paintball">-->
    <div id="container">

        <h2>Managing my user account</h2>
        <img id="avatar"
             src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Squid_icon_%28Splatoon%29.svg/2000px-Squid_icon_%28Splatoon%29.svg.png"
             height="125" alt="avatar user">
        <h2>My wallet</h2>
        <table id="table-wallet" class="table table-responsive table-dark">
                <tr>
                    <td>{{$user->wallet}}</td>
                    <img src="https://cryptodaily.co.uk/wp-content/uploads/2018/01/esports-coin-logo-aligned.png"
                         height="60" alt="coin picture">
                </tr>
        </table>

        <button type="button" id="addToWallet" class="btn btn-primary">Add money</button>
        <br>

        {!! Form::open(['url' => 'users/addToWallet','id' =>'formAddToWallet', $user]) !!}
        <br><br>
        <h2>Add some money to my Wallet</h2>
        <div class="form-group">
            {!! Form::label('addToWallet', 'How much money do you want to add to your Wallet ?') !!}
            <img class="coin" src="https://cryptodaily.co.uk/wp-content/uploads/2018/01/esports-coin-logo-aligned.png"
                 height="60" alt="coin picture">
            {!! Form::number('addToWallet', 0, ['class' => 'form-control']) !!}
        </div>
        <button class="btn btn-primary">Send</button>
        {!! Form::close() !!}

        <script>$("#formAddToWallet").hide();
            $('#addToWallet').on('click', function() {
                $('#formAddToWallet').toggle();
            });
            </script>
    </div>
@endsection
