@if(Session::has('fail'))
    <div class="alert alert-danger">
        {{ Session::get('fail') }}
    </div>
@endif

@if(Session::has('logout'))
    <div class="alert alert-warning">
        {{ Session::get('logout') }}
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