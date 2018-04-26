@if(Session::has('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
@endif

@if(Session::has('no_money'))
    <div class="alert alert-danger">
        {{ Session::get('no_money') }}
    </div>
@endif

@if(Session::has('logout'))
    <div class="alert alert-warning">
        {{ Session::get('logout') }}
    </div>
@endif


@if(Session::has('bet_success'))
    <div class="alert alert-success">
        {{ Session::get('bet_success') }}
    </div>
@endif

@if(Session::has('addToWallet'))
    <div class="alert alert-success">
        {{ Session::get('addToWallet') }}
    </div>
@endif

@if(Session::has('noAddToWallet'))
    <div class="alert alert-danger">
        {{ Session::get('noAddToWallet') }}
    </div>
@endif

@if(Session::has('wrongPassword'))
    <div class="alert alert-danger">
        {{ Session::get('wrongPassword') }}
    </div>
@endif

@if(Session::has('infoUpdated'))
    <div class="alert alert-success">
        {{ Session::get('infoUpdated') }}
    </div>
@endif

@if(Session::has('userCreated'))
    <div class="alert alert-success">
        {{ Session::get('userCreated') }}
    </div>
@endif

@if(Session::has('matchCreated'))
    <div class="alert alert-success">
        {{ Session::get('matchCreated') }}
    </div>
@endif

@if(Session::has('playerCreated'))
    <div class="alert alert-success">
        {{ Session::get('playerCreated') }}
    </div>
@endif

@if(Session::has('wrongEmail'))
    <div class="alert alert-danger">
        {{ Session::get('wrongEmail') }}
    </div>
@endif

@if(Session::has('userDeleted'))
    <div class="alert alert-danger">
        {{ Session::get('userDeleted') }}
    </div>
@endif