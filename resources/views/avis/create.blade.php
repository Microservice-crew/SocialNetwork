@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Créer votre avis</h1>
        <form method="POST" action="{{ route('avis.store') }}">
            @csrf

            <div class="form-group">
                <label for="content">Votre avis :</label>
                <textarea name="content" id="content" rows="4" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Créer l'avis</button>
        </form>
    </div>
@endsection
