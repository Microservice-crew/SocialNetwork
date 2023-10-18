@extends('layouts.dashboardAdmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white">Edit Article</h3>
                    <p class="text-white">Edit your article</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Edit Article</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('articles.update', $article->id) }}" method="POST"0">
                    @csrf
                    @method('PUT') 
                    <div class="form-article">
                        <label for="name">Article Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
                    </div>
                    <div class="form-article">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="4">{{ $article->content }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update Article</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
