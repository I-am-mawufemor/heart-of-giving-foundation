@extends('layouts.admin')
@section('admin-content')
    <div class="card">
        <h1><i class="fa fa-envelope"></i>Contact Us
        </h1>

    </div>

    @if (count($contacts) > 0)
        @foreach ($contacts as $item)
            <div class="card">
                <div class="new-contact">
                    <div class="">
                        <a href="/contact/create"> New</a>
                    </div>
                    <div>
                        <button><a href="/contact/{{ $item->id }}/edit">Edit</a></button>
                    </div>
                    <div class="delete">
                        <form action="{{ route('event.destroy', $item->id) }}" method="POST" class="pull-right"
                            onsubmit="return confirm('Are you sure you want to delete contact?');">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">{{ __('Delete') }}</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">

                {{-- input form displaying contats --}}
                <div class="form-container mt-5">
                    <form>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <input type="text" id="address" name="address" class="form-control"
                                value="{{ $item->address }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ $item->email }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Telephone:</label>
                            <input type="tel" id="phone" name="phone" class="form-control"
                                value="{{ $item->telephone }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook:</label>
                            <input type="url" id="facebook" name="facebook" class="form-control"
                                value="{{ $item->facebook }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter:</label>
                            <input type="url" id="facebook" name="twitter" class="form-control"
                                value="{{ $item->twitter }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="whatsApp" class="form-label">Whats App:</label>
                            <input type="text" id="whatsApp" name="whatsApp" class="form-control"
                                value="{{ $item->whatsApp }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="linkdin" class="form-label">Linkdin:</label>
                            <input type="url" id="linkdin" name="linkdin" class="form-control"
                                value="{{ $item->linkdin }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="created" class="form-label">Created by:</label>
                            <input type="text" id="created" name="created" class="form-control"
                                value="{{ $item->user->name }}" readonly>
                        </div>
                </div>

                </form>
        @endforeach
    @else
        <div class="no-post">No contacts record avalaible</div>
    @endif
    </div>
@endsection
