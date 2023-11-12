@extends('layouts.admin')

@section('admin-content')
    <div class="card">
        <h1>
            <i class="fas fa-images"></i> Gallery
        </h1>

    </div>
    <div class="card">
        <div class="container-dash mt-4">
            <div class="right_area">
                <a href="/gallery/create" class="logout_btn">New <i class="fa fa-file-alt"></i></a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Title</th>
                        <th>Published By</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2023-08-31 10:00 AM</td>
                        <td>Sample Article</td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2023-08-31 11:30 AM</td>
                        <td>Another Article</td>
                        <td>No</td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Include Bootstrap JS and jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
@endsection
