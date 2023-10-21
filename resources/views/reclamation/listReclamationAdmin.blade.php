@extends('layouts.dashboardAdmin')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Liste des Réclamations</h1>
    @foreach($reclamations as $reclamation)
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $reclamation->type }}</h5>
            <p class="card-text">{{ $reclamation->content }}</p>
            @if ($reclamation->picture)
            <img class="rounded-circle img-fluid" src="{{ asset('uploads/' . $reclamation->picture) }}" alt="Reclamation Image">
            @endif
        </div>
    </div>

    <div class="card mb-4">
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

    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Replies</h5>
            <ul class="list-group">
                @foreach($reclamation->replies as $reply)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $reply->content }}

                    <form action="{{ route('deleteReply', $reply->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
</div>



@endsection