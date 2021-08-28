@extends('layouts.guest_navigation')

@section('title', 'Profile - TranscriptMinerSM')
@section('content')
<section class="py-8 py-md-8 border-bottom section-2">
    <div class="container">
          <div class="col-12 col-md-12">
            @if(session()->has('message'))
                  <div class="alert alert-info" id="success_msg">
                      {{ session('message') }}
                  </div>
               @endif
              <h2>Edit Profile</h2>
              <form method="POST" action="{{route('update-profile')}}" id="profileform" >
                @csrf
                <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                <div class="mb-3">
                  <label  class="form-label">Name</label><span class="msg"> *</span>
                  <input type="text" name="name"  class="form-control" placeholder="Name" value="{{Auth::user()->name}}" id="name">
                </div>
                <div class="mb-3" >
                  <label  class="form-label">Email address</label><span class="msg"> *</span>
                  <input type="email" name="email" class="form-control" placeholder="Email address" value="{{Auth::user()->email}}">
                </div>
                <button class="btn btn-primary" id="check_validate">Update</button>
              </form>   
          </div>

    </div> 
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript">

          $(document).ready(function(){
            setTimeout(function(){
              $('#success_msg').fadeOut();
            },1500); 
            
        });
          $("#profileform").validate({
            rules: {
              name: "required",
              email: {
                required: true,
                email: true
              }
            }
          });
        </script>  
 </section>
@endsection

