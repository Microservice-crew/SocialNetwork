@extends('layouts.base')

@section('content')

<div class="container">
    <div class="row">
        @foreach($articles as $article)
        <div class="col-md-6 col-lg-4">
            <div class="iq-card">
                <div class="iq-card-body">
                    <h5>{{ $article->title }}</h5>
                    <p>{{ $article->content }}</p>
                    <a href="{{ route('articles.pdf', ['id' => $article->id]) }}" class="btn btn-primary" target="_blank">Print PDF</a>

                </div>
                
            </div>
           
        </div>
        @endforeach
    </div>
</div>

@endsection
