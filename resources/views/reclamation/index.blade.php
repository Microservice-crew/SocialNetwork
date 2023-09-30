@extends('layouts.base')


@section('content')
    <div class="container">
        <h1>Liste des Réclamations</h1>
        @foreach($reclamations as $reclamation)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $reclamation->type }}</h5>
                    <p class="card-text">{{ $reclamation->content }}</p>
                    

                    <form method="POST" action="{{ route('reclamations.destroy', ['id' => $reclamation->id]) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
