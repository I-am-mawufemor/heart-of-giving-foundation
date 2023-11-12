@extends('layouts.admin')

@section('admin-content')
    <div class="card">
        <h1><i class="uil uil-tachometer-fast-alt"></i>{{ config('app.name', 'Heart of Giving Foundation') }} Dashboard
        </h1>

    </div>
    <div class="card">
        <div class="boxes">
            @if ($type === 'image')
                <div class="box box1">
                    <i class="fas fa-images"></i> <!-- Updated the icon to images icon -->
                    <span class="text">Total Image Posts</span>
                    <span class="number">{{ $count }}</span>
                </div>
            @else
                <div class="box box2">
                    <i class="fas fa-file-alt"></i> <!-- Updated the icon to file-alt icon -->
                    <span class="text">Total Posts</span>
                    <span class="number">{{ $count }}</span>
                </div>
            @endif
        </div>
    </div>

    <div class="card">
        <div class="container-dash mt-4">
            <h2>
                <i class="uil uil-clock-three"></i>
                Recent Activities
            </h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Created At</th>
                        <th>Title</th>
                        <th>Published</th>
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
