@extends('layouts.base')

@section('content')
    <div class="wrapper">
        <div id="content-page" class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height blog blog-detail">
                            <div class="iq-card-body">
                                <div class="image-block">
                                    <img src="{{ asset($event->image) }}" class="img-fluid rounded w-100" alt="Event Image">
                                </div>
                                <div class="blog-description mt-3">
                                    <h5 class="mb-3 pb-3 border-bottom">{{ $event->name }}</h5>
                                    <div class="blog-meta d-flex align-items-center mb-3">
                                        <div class="date mr-4">
                                            <i class="ri-calendar-2-fill text-primary pr-2"></i>{{ $event->date }}
                                        </div>
                                        <div class="date mr-4">
                                            <i  class="ri-admin-fill"></i>{{ $event->publisher->name }}
                                        </div>
<!--                                        <div class="like mr-4">
                                            <i class="ri-thumb-up-line text-primary pr-2"></i>{{--{{ $event->likes }}--}} likes
                                        </div>-->
<!--                                        <div class="comments mr-4">
                                            <i class="ri-chat-3-line text-primary pr-2"></i>{{--{{ $event->comments->count() }}--}} comments
                                        </div>
                                        <div class="share">
                                            <i class="ri-share-forward-line text-primary pr-2"></i>share
                                        </div>-->
                                    </div>
                                    <p>{{ $event->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height blog user-comment">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="iq-card-title">Users Comments</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="row">
                                <div class="col-lg-12">

                                    <!-- User comments go here -->
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height blog">
                                        <div class="iq-card-body">

                                            @if (isset($comments) && count($comments) > 0)
                                                @foreach ($comments as $comment)
                                                    <div class="card mb-3 position-relative">
                                                        <div class="card-body d-flex justify-content-between">
                                                            <div>
                                                                <img class="rounded-circle img-fluid avatar-40 mb-2" src="{{ asset('storage/' . $comment->user->photo) }}" alt="profile" loading="lazy">

                                                                <h6 class="card-subtitle mb-2 text-muted">{{ $comment->user->name }}</h6>
                                                                <p class="card-text">{{ $comment->content }}</p>
                                                                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                            </div>

                                                            <!-- Dropdown container -->
                                                            <div class="dropdown ml-auto">
                                                                <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <!-- Ellipsis (horizontal three dots icon) -->
                                                                    <i class="ri-more-2-fill"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="commentOptions">
                                                                    <li><a class="dropdown-item" href="javascript:void(0);" onclick="editComment({{ $comment->id }})"><i class="ri-edit-line"></i></a></li>
                                                                    <li>
                                                                        <form action="{{ route('comment.destroy', ['comment' => $comment->id]) }}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="dropdown-item text-danger"><i class="ri-delete-bin-line"></i></button>
                                                                        </form>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Add a form for editing comments (initially hidden) -->
                                                    <div id="comment-{{ $comment->id }}-edit" style="display: none;">
                                                        <form action="{{ route('comment.update', ['comment' => $comment->id]) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="edit-comment-{{ $comment->id }}">Edit Your Comment</label>
                                                                <input type="text" name="content" id="edit-comment-{{ $comment->id }}" class="form-control" value="{{ $comment->content }}">
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="button" class="btn btn-secondary" onclick="cancelEdit({{ $comment->id }})">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                @endforeach
                                            @else
                                                <p>No comments yet. Be the first to comment!</p>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <!-- Add more user comments here -->

                                <div class="col-lg-12">
                                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height blog">
                                        <div class="iq-card-body">
                                            <h5 class="mb-3">Leave a Comment</h5>
                                            <form action="{{ route('comment.create') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="event_id" value="{{ $event->id }}"> <!-- Include the event_id -->
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> <!-- Include the user_id -->
                                                <div class="form-group">
                                                    <label for="comment">Your Comment</label>
                                                    <textarea class="form-control" name="content" id="content" rows="4" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script>
        function editComment(commentId) {
            // Show the edit form for the specific comment
            $('#comment-' + commentId + '-edit').show();
        }

    function cancelEdit(commentId) {
    // Hide the edit form for the specific comment
    $('#comment-' + commentId + '-edit').hide();
    }
    </script>
@endsection


