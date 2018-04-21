@extends('default')

@section('content')
    @include('flash')

    <a href="/admin/match"><button type="button" class="btn btn-primary"><-Back</button></a><br>
    <br><table class="table table-responsive table-dark">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Status</td>
        </tr>

        <tr>
            <td> {{ $user['id']}} </td>
            <td> {{ $user['name']}} </td>
            <td> {{ $user['email']}} </td>
            <td> {{ $user['is_admin']}} </td>
        </tr>
    </table>

    <button id = "editUser" class="btn btn-primary">Edit</button>

    {!! Form::open(['url' => route('editUserAdmin', $user['id']), 'id' => 'formEditUser']) !!}
    <br><h2>Edit User Info</h2>
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $user->name,  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', $user->email,  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_admin', 'Status') !!}
        {!! Form::text('is_admin', $user->is_admin,  ['class' => 'form-control', 'required' => 'required']) !!}
    </div>

    <button class="btn btn-primary">Send</button>
    {!! Form::close() !!}

    <br>

    {!! Form::open(['route' => ['deleteUser', $user['id']]]) !!}
    <br><button id ="deleteUser" class="btn btn-primary">Delete</button>
    {!! Form::close() !!}

    <script>$("#formEditUser").hide();
        $('#editUser').on('click', function() {
            $('#formEditUser').toggle();
        });
    </script>



@endsection