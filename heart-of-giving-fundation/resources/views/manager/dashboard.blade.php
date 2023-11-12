@extends('layouts.admin')

@section('admin-content')
    <div class="login-container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 ">
                <h3> Welcome to our dashbord</h3>
                <hr>
                <table class="table"></table>
                <thead>
                    <th>Name</th>


                </thead>
                <tbody>
                    <tr>

                        <td>{{ $data->name }}</td>
                        <td><a href="/logout">Logout</a></td>
                    </tr>
                </tbody>
            </div>
        </div>
    </div>
@endsection
