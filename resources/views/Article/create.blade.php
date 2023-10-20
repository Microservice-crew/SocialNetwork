@extends('layouts.dashboardAdmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white">Article Form</h3>
                    <p class="text-white">Create your Article</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Create your Article</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-article">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-article">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="4" placeholder="Enter Content"></textarea>
                    </div>
                    <div class="form-article">
                        <label for="group_id">Select Group</label>
                        <select class="form-control" id="group_id" name="group_id">
                            @foreach($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div>
                        <button type="submit" class="btn btn-primary">Post Article</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
