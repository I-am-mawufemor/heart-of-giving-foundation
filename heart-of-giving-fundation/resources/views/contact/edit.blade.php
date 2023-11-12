@extends('layouts.admin')

@section('admin-content')
    <section id="form-container">
        <div class="arrow-left">
            <a href="/contacts" class="fa fa-arrow-left"></a>
        </div>
        <h1>Edit Contact</h1>


        <form action="{{ route('contact.update', $post->id) }}" method="POST">
            @csrf
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif


            <div class="form-group">
                {{-- Sub-Heading 1 --}}
                <label for="address">{{ __('Address') }}</label>
                <div class="">
                    <input type="text" id="address" class="form-control @error('address') is-invalid @enderror"
                        name="address" value="{{ $post->address }}" required autocomplete="address" autofocus>
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Sub-Heading 2 --}}
            <div class="form-group">
                <label for="Email">{{ __('Email') }}</label>
                <div class="">
                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ $post->email }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            {{-- Sub-heading 3 --}}
            <div class="form-group">
                <label for="telephone">{{ __('Telephone') }}</label>
                <div class="">
                    <input type="text" id="telephone" class="form-control @error('telephone') is-invalid @enderror"
                        name="telephone" value="{{ $post->telephone }}" required autocomplete="telephone" autofocus>
                    @error('telephone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            {{-- Sub-heading 3 --}}
            <div class="form-group">
                <label for="facebook">{{ __('Scoials (Facebook)*') }}</label>
                <div class="">
                    <input type="text" id="facebook" class="form-control @error('facebook') is-invalid @enderror"
                        name="facebook" value="{{ $post->facebook }}" required autocomplete="facebook" autofocus>
                    @error('facebook')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="twitter">{{ __('Scoials (Twitter)*') }}</label>
                <div class="">
                    <input type="text" id="twitter" class="form-control @error('twitter') is-invalid @enderror"
                        name="twitter" value="{{ $post->twitter }}" required autocomplete="twitter" autofocus>
                    @error('twitter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="whatsApp">{{ __('Scoials (Whats App)*') }}</label>
                <div class="">
                    <input type="text" id="whatsApp" class="form-control @error('whatsApp') is-invalid @enderror"
                        name="whatsApp" value="{{ $post->whatsApp }}" required autocomplete="sub_heading_3" autofocus>
                    @error('whatsApp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="linkdin">{{ __('Scoials (Linkdin)*') }}</label>
                <div class="">
                    <input type="text" id="" class="form-control @error('linkdin') is-invalid @enderror"
                        name="linkdin" value="{{ $post->linkdin }}" required autocomplete="linkdin" autofocus>
                    @error('linkdin')
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
