@extends('layouts.dashboardAdmin')
 @section('content')
  <div class="container">
     <div class="row"> 
        <div class="col-sm-12">
             <div class="card position-relative inner-page-bg bg-primary" style="height: 150px;">
                 <div class="inner-page-title">
                     <h3 class="text-white">Group Form</h3>
                      <p class="text-white">Create your group</p>
                </div> </div> 
            </div> 
            <div class="card"> 
                <div class="card-header d-flex justify-content-between"> 
                    <div class="header-title">
                         <h4 class="card-title">Create your Group</h4> </div> </div>
                          <div class="card-body"> <form action="{{ route('groups.store') }}" method="POST" enctype="multipart/form-data">
                             @csrf <div class="form-group">
                                 <label for="name">Group Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"> </div>
                                   <div class="form-group"> <label for="description">Description</label>
                                     <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Description"></textarea> </div>
                                      <div class="form-group"> <label for="picture">Picture</label> <input type="text"class="form-control-file" id="picture" name="picture"> </div> 
                                      <div class="form-group"> <label for="nbrMembers">Number of Members</label> <input type="number" class="form-control" id="nbrMembers" name="nbrMembers" placeholder="Enter Number of Members"> </div> 
                                      <button type="submit" class="btn btn-primary">Create Group</button> </form> </div> </div> </div> </div> 
     @endsection 