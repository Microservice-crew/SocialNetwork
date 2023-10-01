@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Event List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{ route('createEvent') }}" class="btn btn-success mb-3">Create Event</a>
            </div>
        </div>
        <div class="row">
            @forelse($events as $event)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="image-container" style="height: 200px; overflow: hidden;">
                            <img class="card-img-top" src="{{ $event->image }}" alt="Event Image">
                        </div>                        <div class="card-body">
                            <div class="card-content" style="max-height: 250px; overflow-y: auto;">
                                <h5 class="card-title">{{ $event->name }}</h5>
                                <p class="card-text">Date: {{ $event->date }}</p>
                                <p class="card-text">Location: {{ $event->location }}</p>
                                <p class="card-text">Published By: {{ $event->publisher->name }}</p>
                            </div>
                            <a href="{{ route('events', $event->id) }}" class="btn btn-primary">View Event</a>
                            @if(auth()->user()->id === $event->published_by)
                                <form action="{{ route('deleteEvent', $event->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mt-2">Delete Event</button>
                                </form>
                            @endif
                            @if(auth()->user()->id === $event->published_by)
                                <a href="{{ route('events.edit', ['event' => $event->id]) }}" class="btn btn-info mt-2">Edit</a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12">
                    <p>No events found.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
