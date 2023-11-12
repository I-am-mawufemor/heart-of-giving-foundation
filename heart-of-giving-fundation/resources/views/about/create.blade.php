@extends('layouts.admin')

@section('admin-content')
    <section id="form-container">
        <div class="arrow-left">
            <a href="/aboutUs" class="fa fa-arrow-left"></a>
        </div>
        <h1>Create About Us Post</h1>


        <form action="{{ route('about.store') }}" method="POST">
            @csrf
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-success">{{ Session::get('error') }}</div>
            @endif


            <div class="form-group">
                {{-- Sub-Heading 1 --}}
                <label for="title">{{ __('Sub-heading 1(About us)') }}</label>
                <div class="">
                    <input type="text" id="sub_heading_1"
                        class="form-control @error('sub_heading_1') is-invalid @enderror" name="sub_heading_1"
                        value="{{ old('sub_heading_1') }}" required autocomplete="sub_heading_1" autofocus>
                    @error('sub_heading_1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="body">{{ __('Body of sub-heading 1 (About us)') }}</label>
                <div id="container-ckeditor">

                    <textarea name="sub_heading_1_body" id="editor_1"
                        class="form-control @error('sub_heading_1_body') is-invalid @enderror" rows="20"
                        value="{{ old('sub_heading_1_body') }}" required autocomplete="sub_heading_1_body" autofocus>
                    </textarea>

                    @error('body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>
            {{-- Sub-Heading 2 --}}
            <div class="form-group">
                <label for="title">{{ __('Sub-heading 2 (Mission and vission)') }}</label>
                <div class="">
                    <input type="text" id="sub_heading_2"
                        class="form-control @error('sub_heading_2') is-invalid @enderror" name="sub_heading_2"
                        value="{{ old('sub_heading_2') }}" required autocomplete="sub_heading_2" autofocus>
                    @error('sub_heading_2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="body">{{ __('Body of sub-heading 2 (mission and vission)') }}</label>
                <div id="container-ckeditor">

                    <textarea name="sub_heading_2_body" id="editor_2"
                        class="form-control @error('sub_heading_2_body') is-invalid @enderror" rows="20"
                        value="{{ old('sub_heading_2_body') }}" required autocomplete="sub_heading_2_body" autofocus>
                    </textarea>

                    @error('sub_heading_2_body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>

            {{-- Sub-heading 3 --}}
            <div class="form-group">
                <label for="title">{{ __('Sub-heading 3 (Core Values)') }}</label>
                <div class="">
                    <input type="text" id="sub_heading_3"
                        class="form-control @error('sub_heading_3') is-invalid @enderror" name="sub_heading_3"
                        value="{{ old('sub_heading_3') }}" required autocomplete="sub_heading_3" autofocus>
                    @error('sub_heading_3')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="body">{{ __('Body of sub-heading 3 (Core Values)') }}</label>
                <div id="container-ckeditor">

                    <textarea name="sub_heading_3_body" id="editor_3"
                        class="form-control @error('sub_heading_3_body') is-invalid @enderror" rows="20"
                        value="{{ old('sub_heading_3_body') }}" required autocomplete="sub_heading_3_body" autofocus>
                    </textarea>

                    @error('sub_heading_3_body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>

            {{-- Sub-heading 4 --}}
            <div class="form-group">
                <label for="title">{{ __('Sub-heading 4 (Strategy)') }}</label>
                <div class="">
                    <input type="text" id="sub_heading_4"
                        class="form-control @error('sub_heading_4') is-invalid @enderror" name="sub_heading_4"
                        value="{{ old('sub_heading_4') }}" required autocomplete="sub_heading_4" autofocus>
                    @error('sub_heading_4')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="body">{{ __('Body of sub-heading 4 (Strategy)') }}</label>
                <div id="container-ckeditor">

                    <textarea name="sub_heading_4_body" id="editor_4"
                        class="form-control @error('sub_heading_4_body') is-invalid @enderror" rows="20"
                        value="{{ old('sub_heading_4_body') }}" required autocomplete="sub_heading_4_body" autofocus>
                    </textarea>

                    @error('sub_heading_4_body')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </form>
    </section>
@endsection
