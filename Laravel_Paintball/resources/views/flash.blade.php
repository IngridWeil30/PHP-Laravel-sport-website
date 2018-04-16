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