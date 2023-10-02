@extends('layouts.dashboardAdmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                <div class="inner-page-title">
                    <h3 class="text-white">Edit Group</h3>
                    <p class="text-white">Edit your group</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Edit Group</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('groups.update', $group->id) }}" method="POST"0">
                    @csrf
                    @method('PUT') 
                    <div class="form-group">
                        <label for="name">Group Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $group->name }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4">{{ $group->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="text" class="form-control-file" id="picture" name="picture" value="{{ $group->picture }}">
                    </div>
                    <div class="form-group">
                        <label for="nbrMembers">Number of Members</label>
                        <input type="number" class="form-control" id="nbrMembers" name="nbrMembers" value="{{ $group->nbrMembers }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Group</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
