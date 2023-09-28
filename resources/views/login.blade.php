
@extends('registration')


@section('content') 




<div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
 

              
              <div class="text sign-up-text">Already have an account? <label for="flip"></label></div>
              <div class="text sign-up-text"> <a href="{{ asset ('registre') }}" > SignUp Now </a><label for="flip"></label></div>
              
            
            
            </div>
        </form>
      </div>




@endsection