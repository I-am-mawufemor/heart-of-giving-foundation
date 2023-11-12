@extends('layouts.admin')
@section('admin-content')
    <div class="card">

        <h1><i class="far fa-calendar-check"></i>Home Events
        </h1>

    </div>

    <div class="card">
        <div class="new">
            <a href="/home-event/create"> New</a>
        </div>
        @if (count($posts) > 0)
            <div class="container-dash mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Published By</th>
                            <th>Created At</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </tr>
                    </thead>
                    @foreach ($posts as $post)
                        <tbody>
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->title }}</td>
                                {{-- Edit post button --}}
                                <td><button><a href="/event/{{ $post->id }}/edit">Edit</a></button></td>
                                {{-- Delete post --}}
                                <td>
                                    <form action="{{ route('event.destroy', $post->id) }}" method="POST" class="pull-right"
                                        onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        @else
            <div class="no-post">No post avalaible</div>
        @endif
        <!-- Include Bootstrap JS and jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>
@endsection
