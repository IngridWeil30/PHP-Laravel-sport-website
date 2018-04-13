@extends('default')


@section('content')
    @if(isset($findMatch))
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

        </table>
    @endif
@endsection