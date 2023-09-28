





















@extends('registration')


@section('content') 




<div class="form-content">
          <div class="login-form">
            <div class="title">Forgot your password</div>
            <br>
            <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>


         
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
 
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i> 
                
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
   
              </div>





<br><br>
            <center>   <button class="ml-3" style="background:#5F4375 ; color:white ; font-size : 20px    ">
            {{ __('Email Password Reset Link') }}
            </button> </center>
 

            

              
              <div class="text sign-up-text"> <a href="{{ asset ('login') }}" > Login </a><label for="flip"></label></div>
              
            
            
            </div>
        </form>
      </div>




@endsection
