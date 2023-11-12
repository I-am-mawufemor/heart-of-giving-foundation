@extends('layouts.app')
@section('content')
    <div class="blog-container">
        @if (count($post) > 0)
            @foreach ($post as $posts)
                <div class="card mb-4">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="/storage/cover_images/{{ $posts->cover_image }}" alt="cover_image" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title"><a href="/event/{{ $posts->id }}">{{ $posts->title }}</a></h1>
                                <p class="card-text"><small class="text-muted">Written on {{ $posts->created_at }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $post->links() }}
        @else
            <div class="container">
                <h1>No Post Found</h1>
            </div>
        @endif
    </div>
@endsection
