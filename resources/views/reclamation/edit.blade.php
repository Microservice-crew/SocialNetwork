@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Modifier la Réclamation</h1>
        <form method="POST" action="{{ route('reclamations.update', ['id' => $reclamation->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="type">Type de Réclamation</label>
                <select name="type" id="type" class="form-control">
                    @foreach($reclamationTypes as $value => $label)
                        <option value="{{ $value }}" {{ $reclamation->type == $value ? 'selected' : '' }}>
                            {{ $label }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Contenu de la Réclamation</label>
                <textarea name="content" id="content" class="form-control" rows="4">{{ $reclamation->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour la Réclamation</button>
        </form>
    </div>
@endsection
