@extends('layouts.app')

@section('content')
    <h1 id="page-title">Simple Gallery Grid View with Viewer using HTML, CSS, and JS</h1>
    <hr id="title_hr">
    <div class="container">
        <div id="gallery-wrapper">
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-7.JPG') }}" alt="Gallery Image 1">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-6.JPG') }}" alt="Gallery Image 2">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-4.JPG') }}" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-2.JPG') }}" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-3.JPG') }}" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-5.JPG') }}" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-4.JPG') }}" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-10.JPG') }}" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-1.JPG') }}" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-3.JPG') }}" alt="Gallery Image 3">
            </div>
            <div class="gallery-item">
                <img src="{{ asset('asset/image/img-4.JPG') }}" alt="Gallery Image 3">
            </div>
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
