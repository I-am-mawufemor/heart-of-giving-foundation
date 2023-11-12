@extends('layouts.app')

@section('content')
    <h1 id="page-title">Simple Gallery Grid View with Viewer using HTML, CSS, and JS</h1>
    <hr id="title_hr">
    <div class="container">
        <div id="gallery-wrapper">
            @foreach ($images as $image)
                <div class="gallery-item">
                    <img src="{{ asset('storage/images/' . $image->filename) }}" alt="{{ $image->title }}">
                    {{-- <img src="{{ Storage::url("/storage/app/{$image->filename}") }}" alt="{{ $image->filename }}" /> --}}
                </div>
            @endforeach


        </div>
    </div>
    <div id="preview">
        <div id="preview-body">
            <div id="preview-img">
                <img src="./images/image-6.jpg" alt="Preview Image">
            </div>
            <button class="preview-close"><span aria-hidden="true">&times;</span></button>
            <button class="previous-btn"><span aria-hidden="true">&lt;</span></button>
            <button class="next-btn"><span aria-hidden="true">&gt;</span></button>
        </div>
    </div>
@endsection
