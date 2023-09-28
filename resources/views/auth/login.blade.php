




















@extends('registration')


@section('content') 




<div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>


            <form method="POST" action="{{ route('login') }}">
              @csrf

            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i> 
                
                
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
   
              </div>





              <div class="input-box">
                <i class="fas fa-lock"></i>
             
            
                <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            </div>




     <!-- Remember Me -->
     <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
<br><br>
            <center>   <button class="ml-3" style="background:#5F4375 ; color:white ; font-size : 20px    ">
                {{ __('Log in') }}
            </button> </center>
 

            

              
              <div class="text sign-up-text">Already have an account? <label for="flip"></label></div>
              <div class="text sign-up-text"> <a href="{{ asset ('register') }}" > SignUp Now </a><label for="flip"></label></div>
              
            
            
            </div>
        </form>
      </div>




@endsection
