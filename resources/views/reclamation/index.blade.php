@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Liste des Réclamations</h1>
        @foreach($reclamations as $reclamation)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $reclamation->type }}</h5>
                    <p class="card-text">{{ $reclamation->content }}</p>
                    @if ($reclamation->picture)
                    <img class="rounded-circle img-fluid" src="{{ asset('uploads/' . $reclamation->picture) }}" alt="Hello">
                    @endif
                    
                    <!-- Add an "Edit" button linking to the edit route -->
                    <a href="{{ route('reclamations.edit', ['reclamation' => $reclamation->id]) }}" class="btn btn-primary">Edit</a>
                    <form method="POST" action="{{ route('reclamations.destroy', ['reclamation' => $reclamation->id]) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
