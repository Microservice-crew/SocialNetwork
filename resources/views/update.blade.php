





@extends('layouts.base')


@section('content') 





























<div class="container">
               <div class="row">
            
                  <div class="col-lg-12">
                     <div class="iq-edit-list-data">
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                              <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Edite posts </h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                
                                    





    <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->

        <label for="content">Content</label><br>
        <textarea name="content" id="content" rows="10" cols="50">{{ $post->content }}</textarea><br>

        <label for="picture">Picture</label><br>
        <input type="file" name="picture" id="picture"><br>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>




@endsection