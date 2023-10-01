




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
                                       <h4 class="card-title">Edit Profile </h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form>
                                    



                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">        
                                         @include('profile.partials.update-profile-information-form')       
                                          </div>
                                          <div class="form-group col-sm-6">
                                          @include('profile.partials.update-password-form')
                                          </div>
                                          <div class="form-group col-sm-6">

                                          <!-- Delete Account Button -->
<form method="POST" action="{{ route('profile.destroy') }}" class="mt-4">
    @csrf
    @method('DELETE')
    
    <button type="submit" onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.');"
            class="text-red-600 hover:text-red-800">Delete Account</button>
</form>
                                          </div>
                                         
                                    </form>
                                 </div>
                              </div>
                           </div>
                          
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> 
               </div>
            </div>
         </div>







@endsection