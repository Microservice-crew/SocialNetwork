<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SocialV - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href=" {{ asset ('images/favicon.ico') }} " />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}  ">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ asset ('css/typography.css') }}  ">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ asset ('css/style.css ') }} ">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ asset ('css/responsive.css') }} ">
   </head>











   <body class="right-column-fixed">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->











      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="active">
                        <a href="{{ asset ('') }} " class=" "><i class="las la-newspaper"></i><span>Home</span></a>
                     </li>
                     <li>
                        <a href="{{ asset ('profil') }}" class=" "><i class="las la-user"></i><span>Profile</span></a>
                     </li>
                     <li>
                        <a href="{{ asset ('amis') }} " class=" "><i class="las la-user-friends"></i><span>Friend Lists</span></a>
                     </li>

                     <li>
                        <a href="{{ asset ('request') }}" class=" "><i class="las la-anchor"></i><span>Friend Request</span></a>
                     </li>


                     <li>
                        <a href="{{ asset ('groupe') }}" class=" "><i class="las la-users"></i><span>Group</span></a>
                     </li>

                     <li>
                        <a href="{{ asset ('notification') }}" class=" "><i class="las la-bell"></i><span>Notification</span></a>
                     </li>


                     <li>
                        <a href="{{ asset ('chat') }}" class=" "><i class="lab la-rocketchat"></i><span>Chat</span></a>
                     </li>


                     <li>
                        <a href="{{ asset ('setting') }}" class=" "><i class="las la-check-circle"></i><span>Setting</span></a>
                     </li>


                     <li>
                        <a href="{{ asset ('Event') }}" class=" "><i class="lab la-blogger"></i><span>Event</span></a>
                     </li>







                     <li>
                        <a href="{{ asset ('#pages') }} " class="  collapsed"  data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li>
                              <a href="{{ asset ('#authentication') }} " class="  collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                                 <li><a href="{{ asset ('sign-in.html') }} "><i class="ri-login-box-line"></i>Login</a></li>
                                 <li><a href="{{ asset ('sign-up.html') }}"><i class="ri-login-circle-line"></i>Register</a></li>
                                 <li><a href="{{ asset ('pages-recoverpw.html') }}"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                                 <li><a href="{{ asset ('pages-confirm-mail.html') }}"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                                 <li><a href="{{ asset ('pages-lock-screen.html') }}"><i class="ri-lock-line"></i>Lock Screen</a></li>
                              </ul>
                           </li>

                        </ul>
                     </li>

                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>






































                  <!-- TOP Nav Bar -->
                  <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href=" {{ asset ('index.html') }}">
                     <img src="{{ asset ('images/logo.png') }}" class="img-fluid" alt="">
                     <span>SocialV</span>
                     </a>
                     <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-menu-line"></i></div>
                     </div>
                  </div>
                  </div>





                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href=" {{ asset ('') }} #"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li>
                           <a href=" {{ asset ('profil') }} " class="  d-flex align-items-center">
                              <img src="{{ asset ('images/user/1.jpg') }}" class="img-fluid rounded-circle mr-3" alt="user">
                              @auth
                              <div class="caption">
                                 <h6 class="mb-0 line-height" style="font-size:16px">
                                    
                              
    {{ Auth::user()->name }}
                             
                              
                              </h6>
                              </div>
                              @endauth
                           </a>
                        </li>
                        <li>
                           <a href=" {{ asset ('') }}" class="  d-flex align-items-center">
                           <i class="ri-home-line"></i>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="search-toggle  " href=" {{ asset ('request') }}"><i class="ri-group-line"></i></a>
                           <div class="iq-sub-dropdown iq-sub-dropdown-large">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Friend Request<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{ asset ('images/user/01.jpg') }}" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Jaques Amole</h6>
                                                <p class="mb-0">40  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href=" {{ asset ('javascript:void();') }}" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href=" {{ asset ('javascript:void();') }}" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{ asset ('images/user/02.jpg') }}" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lucy Tania</h6>
                                                <p class="mb-0">12  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href=" {{ asset ('javascript:void();') }}" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href=" {{ asset ('javascript:void();') }}" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{ asset ('images/user/03.jpg') }}" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Manny Petty</h6>
                                                <p class="mb-0">3  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href=" {{ asset ('javascript:void();') }}" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href=" {{ asset ('javascript:void();') }}" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{ asset ('images/user/04.jpg') }}" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Marsha Mello</h6>
                                                <p class="mb-0">15  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href=" {{ asset ('javascript:void();') }}" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href=" {{ asset ('javascript:void();') }}" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-center">
                                       <a href=" {{ asset ('#') }}" class="mr-3 btn text-primary">View More Request</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a href=" {{ asset ('#') }}" class="search-toggle  ">
                              <div id="lottie-beil"></div>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/01.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Bni</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/02.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/03.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Two customer is left</h6>
                                             <small class="float-right font-size-12">2 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/04.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Mail from Fenny</h6>
                                             <small class="float-right font-size-12">3 days ago</small>
                                             <p class="mb-0">Cyst Bni</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item dropdown">
                           <a href=" {{ asset ('#') }}" class="search-toggle  ">
                              <div id="lottie-mail"></div>
                              <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/01.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Bni Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/02.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/03.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/04.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href=" {{ asset ('#') }}" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="{{ asset ('images/user/05.jpg') }}" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>















                     <ul class="navbar-list">
                        <li>
                           <a href=" {{ asset ('#') }}" class="search-toggle   d-flex align-items-center">
                           <i class="ri-arrow-down-s-fill"></i>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3 line-height">
                                       <h5 class="mb-0 text-white line-height">Hello zied mathlouthi</h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href=" {{ asset ('profil') }}" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href=" {{ asset ('editprofil') }}" class="iq-sub-card iq-bg-warning-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-warning">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Edit Profile</h6>
                                             <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>


                                    <div class="d-inline-block w-100 text-center p-3">
                                    <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="bg-primary iq-sign-btn">
                {{ __('Log Out') }}
            </button>
        </form>









                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->

































         <!-- Right Sidebar Panel Start-->
         <div class="right-sidebar-mini right-sidebar">
            <div class="right-sidebar-panel p-0">
               <div class="iq-card shadow-none">
                  <div class="iq-card-body p-0">
                     <div class="media-height p-3" data-scrollbar="init">
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/02.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Anna Sthesia</a></h6>
                              <p class="mb-0">Just Now</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/02.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Paul Molive</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/03.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Anna Mull</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>


                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/11.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Bob Frapples</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/02.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Barb Ackue</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/03.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Greta Life</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-away">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/12.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Ira Membrit</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-away">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/01.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Pete Sariya</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center">
                           <div class="iq-profile-avatar">
                              <img class="rounded-circle avatar-50" src="{{ asset ('images/user/02.jpg') }}" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href=" {{ asset ('#') }}">Monty Carlo</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                     </div>
                     <div class="right-sidebar-toggle bg-primary mt-3">
                        <i class="ri-arrow-left-line side-left-icon"></i>
                        <i class="ri-arrow-right-line side-right-icon"><span class="ml-3 d-inline-block">Close Menu</span></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Right Sidebar Panel End-->








         <!-- Page Content  -->
         <div id="content-page" class="content-page">

         @yield('content')

         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="{{ asset ('privacy-policy.html') }}">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="{{ asset ('terms-of-service.html') }}">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="{{ asset ('#') }}">SocialV</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{ asset ('js/jquery.min.js') }}"></script>
      <script src="{{ asset ('js/popper.min.js') }}"></script>
      <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
      <!-- Appear JavaScript -->
      <script src="{{ asset ('js/jquery.appear.js') }}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ asset ('js/countdown.min.js') }}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ asset ('js/waypoints.min.js') }}"></script>
      <script src="{{ asset ('js/jquery.counterup.min.js') }}"></script>
      <!-- Wow JavaScript -->
      <script src="{{ asset ('js/wow.min.js') }}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ asset ('js/apexcharts.js') }}"></script>
      <!-- Slick JavaScript -->
      <script src="{{ asset ('js/slick.min.js') }}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ asset ('js/select2.min.js') }}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ asset ('js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ asset ('js/smooth-scrollbar.js') }}"></script>
      <!-- lottie JavaScript -->
      <script src="{{ asset ('js/lottie.js') }}"></script>
      <!-- am core JavaScript -->
      <script src="{{ asset ('js/core.js') }}"></script>
      <!-- am charts JavaScript -->
      <script src="{{ asset ('js/charts.js') }}"></script>
      <!-- am animated JavaScript -->
      <script src="{{ asset ('js/animated.js') }}"></script>
      <!-- am kelly Jav aScript -->
      <script src="{{ asset ('js/kelly.js') }}"></script>
      <!-- am maps JavaScript -->
      <script src="{{ asset ('js/maps.js') }}"></script>
      <!-- am worldLow JavaScript -->
      <script src="{{ asset ('js/worldLow.js') }}"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ asset ('js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{ asset ('js/custom.js') }}"></script>
   </body>
</html>
