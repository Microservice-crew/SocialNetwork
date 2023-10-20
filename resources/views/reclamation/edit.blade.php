@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Edit Reclamation</h1>
        <form action="{{ route('reclamations.update', $reclamation->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="type">Type of Reclamation</label>
                <select name="type" id="type" class="form-control">
                    @foreach($reclamationTypes as $value => $label)
                        <option value="{{ $value }}" {{ $reclamation->type == $value ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Reclamation Content</label>
                <textarea name="content" id="content" class="form-control" rows="4">{{ $reclamation->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="picture" style="color:#38B4E6 ">Image</label><br/>
                <input type="file" name="picture" id="picture">

                <!-- Display the current picture -->
                @if ($reclamation->picture)
                    <p>Current Picture:</p>
                    <img src="{{ asset('uploads/' . $reclamation->picture) }}" alt="Current Picture" style="max-width: 300px;">
                @endif

                <!-- Display validation error messages for the picture -->
                @error("picture")
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Reclamation</button>
        </form>
    </div>
@endsection
