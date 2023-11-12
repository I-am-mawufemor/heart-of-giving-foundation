@extends('layouts.admin')

@section('admin-content')
    <section id="form-container">
        <div class="">
            <h3 class="text-center text-primary">
                <b>Add image</b>
            </h3>

            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" id="imageForm">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                @endif

                @csrf
                <div class="form-group">
                    <label for="title">{{ __('Title') }}</label>
                    <div class="">
                        <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}"
                            required autocomplete="title" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="images">{{ __('Images') }}</label>
                    <div class="">
                        <input type="file" id="input-file-now-custom-3" class="form-control" name="images[]" multiple
                            required autocomplete="off" autofocus>
                        @error('images')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small class="text-muted">Maximum file size: 2MB, allowed formats: JPEG, PNG, JPG, GIF.</small>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary" id="submitButton">{{ __('Submit') }}</button>
            </form>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imageForm = document.getElementById('imageForm');
            const submitButton = document.getElementById('submitButton');
            const titleInput = document.getElementById('title');
            const imagesInput = document.getElementById('input-file-now-custom-3');

            imageForm.addEventListener('submit', function(e) {
                let isValid = true;

                // Validate the title (required)
                if (titleInput.value.trim() === '') {
                    isValid = false;
                    alert('Title is required.');
                }

                // Validate the images (at least one file is required)
                if (imagesInput.files.length === 0) {
                    isValid = false;
                    alert('At least one image is required.');
                }

                if (!isValid) {
                    e.preventDefault(); // Prevent form submission if validation fails
                }
            });
        });
    </script>
@endsection
