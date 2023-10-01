@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Edit Reclamation</h1>
        <form action="{{ route('reclamations.update', $reclamation->id) }}" method="POST">
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
            <button type="submit" class="btn btn-primary">Update Reclamation</button>
        </form>
    </div>
@endsection
