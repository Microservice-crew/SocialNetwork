
@extends('layouts.dashboardAdmin')


@section('content') 

<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Articles</h4>
               </div>
               <div class="card-header-toolbar d-flex align-items-center">
                   
                               
               </div>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <div class="row justify-content-between d-flex">
                     <div class="col-sm-12 col-md-6">
                        <div id="user_list_datatable_info" class="dataTables_filter">
                           <form class="me-3 position-relative">
                              <div class="form-article mb-0">
                                 <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search">
                              </div>
                    </form>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6">
                     <div class="user-list-files d-flex justify-content-end">
        <a href="{{ route('articles.store') }}" class="chat-icon-delete btn bg-soft-primary">Create</a>
    </div>
                     </div>
                  </div>
                  <table class="files-lists table table-striped mt-4">
    <thead>
        <tr>
            
            
            <th scope="col">Article Title</th>
            <th scope="col">Content</th>
            <th scope="col">Date</th>
            <th scope="col">Group</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>
                <!-- Display Article Name -->
                {{ $article->title }}
            </td>
            <td>
                <!-- Display Description -->
                {{ $article->content }}
            </td>
            <td>
                <!-- Display Date -->
                {{ $article->created_at->format('M d, Y') }}
            </td>
            <td>
                <!-- Display Group Name -->
                {{ $article->group->name ?? 'No Group' }}
            </td>
            <td>
                <div class="flex align-items-center list-user-action lh-1">
                    <form method="POST" action="{{ route('articles.destroy', ['article' => $article->id]) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                            <i class="material-symbols-outlined">delete</i>
                        </button>
                    </form>
                    <!-- Update Button -->
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Update" href="{{ route('articles.edit', ['article' => $article->id]) }}">
                        <i class="material-symbols-outlined">edit</i>
                    </a>
                </div>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection

