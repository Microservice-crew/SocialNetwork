 


@extends('layouts.base')


@section('content') 

            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                           <div class="profile-header profile-info">
                              <div class="cover-container">
                                 <img src="images/page-img/profile-bg1.jpg" alt="profile-bg" class="rounded img-fluid">
                                 <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                                    <li><a href="javascript:void();"><i class="ri-pencil-line"></i></a></li>
                                    <li><a href="javascript:void();"><i class="ri-settings-4-line"></i></a></li>
                                 </ul>
                              </div>
                              <div class="user-detail text-center mb-3">
                                 <div class="profile-img">
                                    <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="profile-img" class="avatar-130 img-fluid" />
                                 </div>
                                 <div class="profile-detail">
                                    <h3 class="">{{ Auth::user()->name }}</h3>
                                 </div>
                              </div>
                              <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                                 <div class="social-links">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pr-3">
                                          <a href="#"><img src="images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="#"><img src="images/icon/09.png" class="img-fluid rounded" alt="Twitter"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="#"><img src="images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="#"><img src="images/icon/11.png" class="img-fluid rounded" alt="Google plus"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="#"><img src="images/icon/12.png" class="img-fluid rounded" alt="You tube"></a>
                                       </li>
                                       <li class="text-center pr-3">
                                          <a href="#"><img src="images/icon/13.png" class="img-fluid rounded" alt="linkedin"></a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="social-info">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pl-3">
                                          <h6>Posts</h6>
                                          <p class="mb-0">690</p>
                                       </li>
                                       <li class="text-center pl-3">
                                          <h6>Followers</h6>
                                          <p class="mb-0">206</p>
                                       </li>
                                       <li class="text-center pl-3">
                                          <h6>Following</h6>
                                          <p class="mb-0">100</p>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="iq-card">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="iq-card-title">About</h4>
                              </div>
                           </div>
                           <div class="iq-card-body">
                              <ul class="list-inline p-0 m-0">
                                 <li class="mb-2 d-flex align-items-center">
                                    <i class="ri-user-line pr-3 font-size-20"></i>
                                    <p class="mb-0">Web Developer</p>
                                 </li>
                                 <li class="mb-2 d-flex align-items-center">
                                    <i class="ri-git-repository-line pr-3 font-size-20"></i>
                                    <p class="mb-0">Success in slowing economic activity.</p>
                                 </li>
                                 <li class="mb-2 d-flex align-items-center">
                                    <i class="ri-map-pin-line pr-3 font-size-20"></i>
                                    <p class="mb-0">USA</p>
                                 </li>
                                 <li class="d-flex align-items-center">
                                    <i class="ri-heart-line pr-3 font-size-20"></i>
                                    <p class="mb-0">Single</p>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="iq-card">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Photos</h4>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();">Add Photo </a></p>
                              </div>
                           </div>
                           <div class="iq-card-body">
                              <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="images/page-img/g1.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="images/page-img/g2.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3"><a href="javascript:void();"><img src="images/page-img/g3.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class="col-md-4 col-6 pl-2 pr-0"><a href="javascript:void();"><img src="images/page-img/g4.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class="col-md-4 col-6 pl-2 pr-0"><a href="javascript:void();"><img src="images/page-img/g5.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                                 <li class="col-md-4 col-6 pl-2 pr-0"><a href="javascript:void();"><img src="images/page-img/g6.jpg" alt="gallary-image" class="img-fluid" /></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="iq-card">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Friends</h4>
                              </div>
                              <div class="iq-card-header-toolbar d-flex align-items-center">
                                 <p class="m-0"><a href="javacsript:void();">Add New </a></p>
                              </div>
                           </div>
                           <div class="iq-card-body">
                              <ul class="profile-img-gallary d-flex flex-wrap p-0 m-0">
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();">
                                    <img src="images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Anna Rexia</h6>
                                 </li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="images/user/06.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Tara Zona</h6>
                                 </li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="images/user/07.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Polly Tech</h6>
                                 </li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="images/user/08.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Bill Emia</h6>
                                 </li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="images/user/09.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Moe Fugga</h6>
                                 </li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-3">
                                    <a href="javascript:void();"><img src="images/user/10.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Hal Appeno </h6>
                                 </li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                    <a href="javascript:void();"><img src="images/user/07.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Zack Lee</h6>
                                 </li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                    <a href="javascript:void();"><img src="images/user/06.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Terry Aki</h6>
                                 </li>
                                 <li class="col-md-4 col-6 pl-2 pr-0 pb-0">
                                    <a href="javascript:void();"><img src="images/user/05.jpg" alt="gallary-image" class="img-fluid" /></a>
                                    <h6 class="mt-2">Greta Life</h6>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>




                  <div class="container">
               <div class="row" style="margin-left:32%; margin-top:-111.5%;">
                  <div class="col">
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
                                    <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="userimg" class="avatar-60 rounded-circle">
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





                  </div>
               </div>
            </div>


            
         </div>
      </div>
      <!-- Wrapper END -->




      @endsection