@extends('layouts.base')


@section('content')


<div class="container">
               <div class="row">
                  <div class="col-lg-8 row m-0 p-0">
                     <div class="col-sm-12">
                        <div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Create Post</h4>
         

                              </div>
                           </div> 


                           <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                              <div class="d-flex align-items-center">
                                  
                                 <div class="user-img">
                                    <img src="{{ asset ('images/user/1.jpg') }}" alt="userimg" class="avatar-60 rounded-circle">
                                 </div>
      @auth
      <h5 class="modal-title" id="post-modalLabel" style="color:blck;margin-left:2% ">    {{ Auth::user()->name }}</h5>    
         
                       @endauth


              
                                

<br>



                              </div>
                              
                              <form class="post-text ml-3 w-100" action="javascript:void();">
                                    <input style="margin-top:3%" type="text" class="form-control rounded" placeholder="Write something here..." style="border:none;">
                                 </form>
                              <hr>
                                 <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href=" {{ asset ('#') }}"></a><img src="{{ asset ('images/small/07.png') }}" alt="icon" class="img-fluid"> Photo/Video</li>
                         
                           </div>









                           <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="post-modalLabel" style="color:#38B4E6 ">Create Post</h5>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-fill m-0"></i></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="d-flex align-items-center">
                                       



                                       

	<!-- Le formulaire est géré par la route "posts.store" -->
	<form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

      <p>
			<label for="content" style="color:#38B4E6 " >Contenu</label><br/>
			<textarea name="content" id="content" lang="fr" rows="10" cols="50" placeholder="Le contenu du post" >{{ old('content') }}</textarea>

			<!-- Le message d'erreur pour "content" -->
			@error("content")
			<div>{{ $message }}</div>
			@enderror
		</p>

		
		<p>
			<label for="picture" style="color:#38B4E6 ">Couverture</label><br/> 
			<input type="file" name="picture" id="picture" >

			<!-- Le message d'erreur pour "picture" -->
			@error("picture")
			<div>{{ $message }}</div>
			@enderror
		</p>
		<button type="submit"value="Valider" class="btn btn-primary d-block w-100 mt-3">Post</button>

	</form>
</div>
                                       <hr>

                                     
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>





















                     @foreach ($posts as $post)
  
           
   
  




                     <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                       <img class="rounded-circle img-fluid" src="{{ asset ('images/user/01.jpg') }}" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="{{ asset ('#') }}" class="">{{ $post->user->name}}</a></h5>
                                      
                                    </div>   


                                    
                                 </div>
                              </div>

                              <div class="iq-card-post-toolbar" style="margin-left:91% ">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                             <i class="ri-more-fill"></i>
                                             </span>
                                             <div class="dropdown-menu m-0 p-0">
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <div class="icon font-size-20"><i class="ri-delete-bin-7-line"></i></div>
                                                      <div class="data ml-2">
                                                      <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="margin-left:20px">Delete</button>
        </form>
                                                        
                                                      </div>
                                                   </div>
                                                </a>
                                                <a class="dropdown-item p-3" href="#">
                                                   <div class="d-flex align-items-top">
                                                      <div class="icon font-size-20"><i class="ri-pencil-line"></i></div>
                                                      <div class="data ml-2" style=" margin-top:-15%;">
                                                      <a href="{{ route('update', $post->id) }}" class="btn btn-primary">Edit</a>
                                                      </div>
                                                   </div>
                                                </a>


                                                
  
</div>  
 
</div>
</div>



                              <div class="mt-3">

                              <p style="color:black">{{ $post->content }}</p>
                                </div>
                              <div class="user-post">
                                 <div class="d-flex">  
                              <img src="{{asset ('uploads')}}/{{ $post->picture }}" width="600px" alt="">    
                                
                           
                                    </div>
                               </div>

      





                              <div class="comment-area mt-3">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="like-block position-relative d-flex align-items-center">
                                       <div class="d-flex align-items-center">
                                          <div class="like-data">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                <img src="{{ asset ('images/icon/01.png') }}" class="img-fluid" alt="">
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="ml-2 mr-2" href="{{ asset ('#') }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"><img src="{{ asset ('images/icon/01.png') }}" class="img-fluid" alt=""></a>
                                                   <a class="mr-2" href="{{ asset ('#') }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Love"><img src="{{ asset ('images/icon/02.png') }}" class="img-fluid" alt=""></a>
                                                    </div>
                                             </div>
                                          </div>
                                          <div class="total-like-block ml-2 mr-3">
                                             <div class="dropdown">
                                                <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                                140 Likes
                                                </span>
                                                <div class="dropdown-menu">
                                                   <a class="dropdown-item" href="{{ asset ('#') }}">Max Emum</a>
                                             
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="total-comment-block">
                                          <div class="dropdown">
                                             <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                             20 Comment
                                             </span>
                                             <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ asset ('#') }}">Max Emum</a>
                                                
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                   
                                 </div>
                                 <hr>
                                 <ul class="post-comments p-0 m-0">
                                    <li class="mb-2">
                                       <div class="d-flex flex-wrap">
                                          <div class="user-img">
                                             <img src="{{ asset ('images/user/02.jpg') }} " alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                          </div>
                                          <div class="comment-data-block ml-3">
                                             <h6>Monty Carlo</h6>
                                             <p class="mb-0">Lorem ipsum dolor sit amet</p>
                                             <div class="d-flex flex-wrap align-items-center comment-activity">
                                                <a href="{{ asset ('javascript:void();') }}">like</a>          
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                   
                                 </ul>
                                 <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                    <input type="text" class="form-control rounded">
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                    
                    


                     @endforeach



                  </div>


           


















                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Stories</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <i class="ri-add-line font-size-18"></i>
                                 <div class="stories-data ml-3">
                                    <h5>Creat Your Story</h5>
                                    <p class="mb-0">time to story</p>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center active">
                                 <img src="{{ asset ('images/page-img/s2.jpg') }}" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Anna Mull</h5>
                                    <p class="mb-0">1 hour ago</p>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <img src="{{ asset ('images/page-img/s3.jpg') }}" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Ira Membrit</h5>
                                    <p class="mb-0">4 hour ago</p>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <img src="{{ asset ('images/page-img/s1.jpg') }}" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Bob Frapples</h5>
                                    <p class="mb-0">9 hour ago</p>
                                 </div>
                              </li>
                           </ul>
                           <a href="{{ asset ('#') }}" class="btn btn-primary d-block mt-3">See All</a>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Events</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="{{ asset ('#') }}"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="{{ asset ('#') }}"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="{{ asset ('#') }}"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="{{ asset ('#') }}"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="{{ asset ('#') }}"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <li class="d-flex mb-4 align-items-center ">
                                 <img src="{{ asset ('images/page-img/s4.jpg') }}" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Web Workshop</h5>
                                    <p class="mb-0">1 hour ago</p>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <img src="{{ asset ('images/page-img/s5.jpg') }}" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Fun Events and Festivals</h5>
                                    <p class="mb-0">1 hour ago</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                
                     
                  </div>
                  <div class="col-sm-12 text-center">
                     <img src="{{ asset ('images/page-img/page-load-loader.gif') }}" alt="loader" style="height: 100px;">
                  </div>
               </div>





@endsection