@extends('layouts.admin')
@section('admin-content')
    <div class="card">
        <h1><i class="fa fa-info-circle"></i>About Us
        </h1>

    </div>
    @if (count($about) > 0)
        @foreach ($about as $post)
            <div class="card">
                <div class="new-contact">
                    <div class="">
                        <a href="/about/create"> New</a>
                    </div>
                    <div>
                        <button><a href="/about/{{ $post->id }}/edit">Edit</a></button>
                    </div>
                    <div class="delete">
                        <form action="{{ route('about.destroy', $post->id) }}" method="POST" class="pull-right"
                            onsubmit="return confirm('Are you sure you want to delete contact?');">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">{{ __('Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ $post->sub_heading_1 }}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $post->sub_heading_1_body !!}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ $post->sub_heading_2 }}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $post->sub_heading_2_body !!}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ $post->sub_heading_3 }}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $post->sub_heading_3_body !!}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ $post->sub_heading_4 }}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $post->sub_heading_4_body !!}
                            </div>
                        </div>
                    </div>

                </div>
        @endforeach
    @else
        <div class="no-post">
            No information available
        </div>
    @endif
    </div>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
