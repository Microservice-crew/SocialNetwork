@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Create Event</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('storeEvent') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="image">Event image:</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Event Name:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Event Date:</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Event Location:</label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="published_by" id="published_by" class="form-control" value="{{ Auth::user()->id }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
        </div>
    </div>
@endsection
