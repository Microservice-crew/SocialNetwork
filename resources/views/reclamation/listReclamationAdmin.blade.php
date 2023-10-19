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
                   
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add a Reply</h5>
                    <form action="{{ route('reclamation.reply', $reclamation->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="content" class="form-control" rows="3" placeholder="Your reply here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Reply</button>
                    </form>
                </div>
            </div>
        @endforeach
            
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Replies</h5>
                    @foreach($reclamation->replies as $reply)
                        <p class="card-text">{{ $reply->content }}</p>
                    @endforeach
                </div>
            </div>
    </div>
@endsection