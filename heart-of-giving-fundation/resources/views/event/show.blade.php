@extends('layouts.app')
@section('content')
    <section id="post-details">
        <div class="post-details-container">
            <a href="/event" class="fa fa-arrow-left" aria-hidden="true"></a>
            <div class=" post-section-title">
                <h1>{{ $post->title }}</h1>
            </div>

            <div class="post-cover-image">
                <img class="img-fluid" src="/storage/cover_images/{{ $post->cover_image }}" alt="cover_image">
            </div>
            <div class="post-body">

                {!! $post->Body !!}


            </div>
            <hr>
            <small>{{ $post->created_at }}</small>
            <hr>
        </div>

        <!-- Include Bootstrap JS and jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </section>
@endsection
