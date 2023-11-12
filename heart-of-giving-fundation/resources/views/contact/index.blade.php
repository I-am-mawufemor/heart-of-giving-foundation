@extends('layouts.app')

@section('content')
    <div class="">

        @if ($post->isEmpty())
            <div class="container">
                <h1>No Contact Found</h1>
            </div>
        @else
            <div id="map"></div>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHgtY1mMgYWC8GqrjByOqcTnhexowtrOU"></script>

            @foreach ($post as $item)
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $item->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $item->id }}" aria-expanded="true"
                                aria-controls="collapse{{ $item->id }}">
                                Address
                            </button>
                        </h2>
                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse show"
                            aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $item->address }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $item->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $item->id }}" aria-expanded="true"
                                aria-controls="collapse{{ $item->id }}">
                                Email
                            </button>
                        </h2>
                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse show"
                            aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $item->email }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $item->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $item->id }}" aria-expanded="true"
                                aria-controls="collapse{{ $item->id }}">
                                Telephone
                            </button>
                        </h2>
                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse show"
                            aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $item->telephone }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $item->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $item->id }}" aria-expanded="true"
                                aria-controls="collapse{{ $item->id }}">
                                Socials
                            </button>
                        </h2>
                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse show"
                            aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="">

                                    @php
                                        $colFacebook = $item->facebook;
                                        $colTwitter = $item->twitter;
                                        $colWhatsApp = $item->whatsApp;
                                        $colLinkedin = $item->linkdin;
                                    @endphp

                                    @if ($colFacebook)
                                        <a class="" href="{{ $colFacebook }}"><i class="fab fa-facebook-f"></i></a>
                                    @endif

                                    @if ($colTwitter)
                                        <a class="" href="{{ $colTwitter }}"><i class="fab fa-twitter"></i></a>
                                    @endif

                                    @if ($colWhatsApp)
                                        <a class="" href="https://wa.me/{{ $colWhatsApp }}"><i
                                                class="fab fa-whatsapp"></i></a>
                                    @endif

                                    @if ($colLinkedin)
                                        <a class="" href="{{ $colLinkedin }}"><i class="fab fa-linkedin"></i></a>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
    @endif
    </div>
@endsection
