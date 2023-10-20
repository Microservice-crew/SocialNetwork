@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Vos Réactions</h1>

        <a href="{{ route('avis.index') }}" class="btn btn-primary mb-2">Retour à la liste des avis</a>

        <ul>
            @foreach($reactions as $reaction)
                @if (auth()->check() && $reaction->user_id === auth()->id())
                    <li>
                        <div class="card mb-3">
                            <div class="card-body">
                                @if ($reaction->avis)
                                    <p class="card-text">Avis : {{ $reaction->avis->content }}</p>
                                @else
                                    <p class="card-text">Avis supprimé ou inexistant</p>
                                @endif
                                <p>Votre Réaction : {{ $reaction->type }}</p>
                                <p>Date de Réaction : {{ $reaction->date_reaction }}</p>
                                <form action="{{ route('reactions.destroy', $reaction->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette réaction ?')">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endsection
