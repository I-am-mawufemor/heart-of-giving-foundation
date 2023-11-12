@extends('layouts.admin')

@section('admin-content')
    <section id="form-container">
        <a href="/homeEvent" class="fa fa-arrow-left" aria-hidden="true"></a>
        <h1>Create Frontpage Event Post</h1>

        {{-- <div id="form-container"> --}}
        <form action="{{ route('home-event.store') }}" method="POST" enctype="multipart/form-data">
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif

            @csrf
            <div class="form-group">
                <label for="title">{{ __('Tittle') }}</label>
                <div class="">
                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror"
                        name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="body">{{ __('Body') }}</label>
                <div id="container-ckeditor">

                    <textarea name="body" id="editor" class="form-control @error('body') is-invalid @enderror" rows="20"
                        value="{{ old('body') }}" required autocomplete="body" autofocus>
                    </textarea>

                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>
            <div class="form-group">
                @csrf
                <label for="cover_image">{{ __('Cover image') }}</label>
                <div class="">
                    <input type="file" id="input-file-now-custom-3" class="form-control" name="cover_image"
                        value="{{ old('images') }}">

                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </form>

    </section>
@endsection
