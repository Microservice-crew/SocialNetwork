

































    
@extends('registration')


@section('content') 





<div class="form-content">
<div class="signup-form">
          <div class="title">Signup</div>
   
          <form method="POST" action="{{ route('register') }}">
        @csrf
            <div class="input-boxes">


            
              <div class="input-box">
                <i class="fas fa-user"></i>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your Fullname" />
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your Email" />
  
              </div>







              <div class="input-box">
                <i class="fas fa-lock"></i>
                <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Enter your Password" />

              </div>



              <div class="input-box">
                <i class="fas fa-lock"></i>
               

              <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm your Password"/>



              </div>








<br>

            <center>   <button class="ml-3" style="background:#5F4375 ; color:white ; font-size : 20px    ">
            {{ __('Register') }}
            </button> </center>
             

              
              
              <div class="text sign-up-text"> <a href="{{ asset ('login') }}" > Login Now </a><label for="flip"></label></div>
              

            </div>
      </form>
    </div>


@endsection 

