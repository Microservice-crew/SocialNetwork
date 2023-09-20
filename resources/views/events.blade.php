@extends('layouts.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Event List</h1>
            </div>
        </div>
        <div class="row">
            @foreach($events as $event)
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{ $event->image }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">Date: {{ $event->date }}</p>
                            <p class="card-text">Location: {{ $event->location }}</p>
                            <p class="card-text">Published By: {{ $event->publisher->name }}</p>
                            <a href="{{ route('events', $event->id) }}" class="btn btn-primary">View Event</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
