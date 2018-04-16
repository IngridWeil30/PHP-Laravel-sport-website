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
    <div id="container">
        {{-- PERMET D'AFFICHER EN FONCTION DE LA LANGUE CHOISIR EN URL (EN ou FR)--}}
        <h1>@lang('welcome.success')</h1>
        <h2>Scores table</h2>
        <p>test color</p>
    </div>
    </body>
    </html>
@endsection