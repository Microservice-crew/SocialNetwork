
@extends('layouts.dashboardAdmin')


@section('content') 

<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Groups</h4>
               </div>
               
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <div class="row justify-content-between d-flex">
                     <div class="col-sm-12 col-md-6">
                        <div id="user_list_datatable_info" class="dataTables_filter">
                           <form class="me-3 position-relative">
                              <div class="form-group mb-0">
                                 <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search">
                              </div>
                    </form>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6">
    <div class="user-list-files d-flex justify-content-end">
        <a href="{{ route('groups.store') }}" class="chat-icon-delete btn bg-soft-primary">Create</a>
    </div>
</div>

                  <table class="files-lists table table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">
                <div class="text-center">
                    <input type="checkbox" class="form-check-input">
                </div>
            </th>
            <th scope="col">Group Name</th>
            <th scope="col">Date</th>
            <th scope="col">Members</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($groups as $group)
        <tr>
        <td>
    <div class="text-center">
        <img src="{{asset('uploads/groups/' . $group->picture) }}" alt="Group Picture" style="max-width: 50px; max-height: 50px;">
    </div>
</td>
            <td>
                <!-- Display Group Name -->
                {{ $group->name }}
            </td>
            <td>
                <!-- Display Date -->
                {{ $group->created_at->format('M d, Y') }}
            </td>
            <td>
                <!-- Display Members -->
                {{ $group->nbrMembers }}
            </td>
            <td>
                <!-- Display Description -->
                {{ $group->description }}
            </td>
            <td>
                <div class="flex align-items-center list-user-action lh-1">
                    {{-- <form method="POST" action="{{ route('groups.destroy', ['group' => $group->id]) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="material-symbols-outlined">delete</i></a>
                      </form> --}}
                      

                      <form method="POST" action="{{ route('groups.destroy', ['group' => $group->id]) }}" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="material-symbols-outlined">delete</i></button>
                    </form>
                    



                    <!-- Update Button -->
                    <a data-bs-toggle="tooltip" data-bs-placement="top" title="Update" href="{{ route('groups.edit', ['group' => $group->id]) }}" ><i class="material-symbols-outlined">edit</i></a>
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
</div>

      @endsection