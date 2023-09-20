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
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf
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
                        <label for="published_by">Published By:</label>
                        <select name="published_by" id="published_by" class="form-control" required>
                            <!-- Populate this dropdown with users -->
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
        </div>
    </div>
@endsection
