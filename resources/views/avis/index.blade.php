@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Liste des Avis</h1>
      
        <a href="{{ route('avis.create') }}" class="btn btn-primary mb-2">Ajouter un avis</a>
        <a href="{{ route('reactions.index') }}" class="btn btn-primary mb-2">Vos réactions</a>
        <ul>
            @foreach($avis as $avis)
                <li>
                    <div class="card mb-3">
                        <div class="card-body">
                            <p class="card-text">{{ $avis->content }}</p>
                            <p class="text-right">Publié par : {{ $avis->user->name }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <!-- Boutons de réaction -->
                            <form action="{{ route('react', $avis->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-light" name="type" value="adore">❤️ Adoré</button>
                            </form>
                            <form action="{{ route('react', $avis->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-light" name="type" value="soutien">🤗 Soutien</button>
                            </form>
                            <form action="{{ route('react', $avis->id) }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-light" name="type" value="drole">🤣 Drôle</button>
</form>
                            <form action="{{ route('react', $avis->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-light" name="type" value="triste">😢 Triste</button>
                            </form>
                            <form action="{{ route('react', $avis->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-light" name="type" value="en_colere">😠 En colère</button>
                            </form>
                            
                            @if(session("error_$avis->id"))
    <p class="text-danger">{{ session("error_$avis->id") }}</p>
@endif

                        </div>
                        <div>
                            <!-- "Publié par" s'affiche ici -->
                            <!-- <p>Publié par : {{ $avis->user->name }}</p> -->
                        </div>
                        <div>
                            <!-- Boutons "Modifier" et "Supprimer" sous le cadre -->
                            @if(auth()->check() && auth()->id() === $avis->user_id)
                                <a href="{{ route('avis.edit', $avis->id) }}" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('avis.destroy', $avis->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet avis ?')">Supprimer</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
