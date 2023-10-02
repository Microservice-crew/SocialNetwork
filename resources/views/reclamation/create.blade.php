@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Créer une réclamation</h1>
        <form action="{{ route('reclamations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type">Type de Réclamation</label>
                <select name="type" id="type" class="form-control">
                    @foreach($reclamationTypes as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="content">Contenu de la Réclamation</label>
                <textarea name="content" id="content" class="form-control" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="picture" style="color:#38B4E6 ">IMAGE</label><br/> 
                <input type="file" name="picture" id="picture">
    
                <!-- Display the error message for "picture" -->
                @error("picture")
                <div>{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Soumettre la Réclamation</button>
        </form>
    </div>
@endsection
