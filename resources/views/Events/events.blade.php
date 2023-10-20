@extends('layouts.base')

@section('content')



    <!-- Page Title -->
    <div class="container my-4">
        <h2>Events</h2> <!-- Add your desired title here -->
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-2">
                <a href="{{ route('createEvent') }}" class="btn btn-success mb-3">Create Event</a>
            </div>
        </div>
    </div>
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                @forelse($events as $event)
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height blog-list">
                            <div class="iq-card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-6 order-2 order-md-1">
                                        <div class="image-block">
                                            <img src="{{ $event->image }}" class="img-fluid rounded w-100" alt="blog-img">
                                        </div>
                                    </div>
                                    <div class="col-md-6 order-1 order-md-2 ">
                                        <div class="blog-description p-2 ">
                                            <div class="d-flex justify-content-end">
                                            <div class="dropdown  ml-auto">
                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <!-- Ellipsis (horizontal three dots icon) -->
                                                    <i class="ri-more-2-fill"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="commentOptions">
                                                    @if(auth()->user()->id === $event->published_by)
                                                        <form action="{{ route('deleteEvent', $event->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item"><i class="ri-delete-bin-line"></i></button>
                                                        </form>
                                                    @endif
                                                    @if(auth()->user()->id === $event->published_by)
                                                        <a href="{{ route('events.edit', ['event' => $event->id]) }}" class="dropdown-item"><i class="ri-edit-line"></i></a>
                                                    @endif
                                                </ul>
                                            </div>
                                            </div>
                                            <div class="blog-meta d-flex align-items-center justify-content-between mb-2">
                                                <div class="date"><i class="ri-map-pin-time-line"></i>{{$event->created_at->diffForHumans()}}</div>
                                                    <div class="date"><i class="ri-calendar-line"></i>{{$event->date}}</div> <!-- Add the event date here -->
                                                    <div class="location"><i class="ri-map-pin-line"></i>{{$event->location}}</div> <!-- Add the event location here -->
                                                    <div class="publisher"><i class="ri-user-line"></i>{{$event->publisher->name}}</div> <!-- Add the event publisher here -->

                                            </div>

                                            <h5 class="mb-2">{{ $event->name }}</h5>
                                            <p>{{ $event->description }}</p>
                                            <a href="{{ route('events.detail', ['event' => $event->id]) }}" tabindex="-1">Read More <i class="ri-arrow-right-s-line"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12">
                        <p>No events found.</p>
                    </div>
                @endforelse
                <!-- Repeat the above code for other blog posts -->
            </div>

        </div>
    </div>
@endsection
