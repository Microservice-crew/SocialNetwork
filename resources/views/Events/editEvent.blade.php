@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Update Event</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') {{-- Use PUT method for updating --}}

                    <div class="form-group">
                        <label for="name">Event Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $event->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Event Date:</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ $event->date }}" required>
                    </div>

                    <div class="form-group">
                        <label for="location">Event Location:</label>
                        <input type="text" name="location" id="location" class="form-control" value="{{ $event->location }}" required>
                    </div>

                    <div class="form-group">
                        <label for="location">Event Description:</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ $event->description }}" required>
                    </div>


                    <div class="form-group">
                        <label for="image">Event Image:</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Event</button>
                </form>
            </div>
        </div>
    </div>
@endsection
