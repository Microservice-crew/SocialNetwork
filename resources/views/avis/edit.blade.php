@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Modifier votre avis</h1>
        <form method="POST" action="{{ route('avis.update', $avis->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="content">Votre avis :</label>
                <textarea name="content" id="content" rows="4" class="form-control" required>{{ $avis->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour l'avis</button>
        </form>
    </div>
@endsection
