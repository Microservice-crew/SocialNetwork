@extends('layouts.base')
  
@section('content') 
<div class="container">
    <div class="row">
        @foreach($groups as $group)
        <div class="col-md-6 col-lg-4">
            <div class="iq-card">
                <div class="top-bg-image">
                    <img src="images/page-img/profile-bg1.jpg" class="img-fluid w-100" alt="group-bg">
                </div>
                <div class="iq-card-body text-center">
                    <div class="group-icon">
                        <img src="{{asset('uploads/groups/' . $group->picture) }}"  class="rounded-circle img-fluid avatar-120">
                    </div>
                    <div class="group-info pt-3 pb-3">
                        <h4><a href="group-detail.html">{{ $group->name }}</a></h4>
                        <p>{{ $group->description }}</p>
                    </div>
                    <div class="group-details d-inline-block pb-3">
                        <ul class="d-flex align-items-center justify-content-between list-inline m-0 p-0">
                            <li class="pl-3 pr-3">
                                <p class="mb-0">Registered</p>
                                <h6>{{ $group->created_at->format('M d, Y') }}</h6>
                            </li>
                            <li class="pl-3 pr-3">
                                <p class="mb-0">Member</p>
                                <h6>{{ $group->nbrMembers }}</h6>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('articles.showByGroup', ['groupId' => $group->id]) }}" class="btn btn-primary d-block w-100">Show Articles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
