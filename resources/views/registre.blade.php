
@extends('registration')


@section('content') 





<div class="form-content">
<div class="signup-form">
          <div class="title">Signup</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Enter your Full Name " required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" required>
              </div>

              <div class="input-box">
              <i class="fas fa-phone" ></i>
                <input type="text" placeholder="Enter your Phone Number " required>
              </div>

              <div class="input-box">
                
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" placeholder="Enter your city " required>
              </div>
              <div class="input-box">
              <i class="fas fa-birthday-cake"></i>
             <input  class="form-control" placeholder="Enter your Date Of Birth: " required >
                 </div>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
             

              
              
              <div class="text sign-up-text"> <a href="{{ asset ('login') }}" > Login Now </a><label for="flip"></label></div>
              

            </div>
      </form>
    </div>


@endsection 