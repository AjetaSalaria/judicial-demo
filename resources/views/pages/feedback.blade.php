@extends('layouts.guest_navigation')

@section('title', 'Feedback - TranscriptMinerSM')

@section('content')
<section class="py-8 py-md-8 border-bottom section-2 feedback-sec">
    <div class="container">
          <div class="col-12 col-md-12">
            @if(session()->has('message'))
                  <div class="alert alert-info" id="success_msg">
                      {{ session('message') }}
                  </div>
               @endif
            <h2 class="top-heading">Feedback</h2>
              <form method="POST" action="{{route('postfeedback')}}" id="feedbackform">
                @csrf
                <div class="mb-3">
                  <label  class="form-label">Name</label><span class="msg"> *</span>
                  <input type="text" name="name"  class="form-control" placeholder="Name" value="{{ old('name') }}" id="name"><br>
                <label  class="form-label">Email address</label><span class="msg"> *</span>
                  <input type="email" name="email" class="form-control" placeholder="Email address" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                  <label class="form-label">Feedback</label><span class="msg"> *</span><br>
                 <textarea class="form-control" rows="5" name="feedback" placeholder="Feedback"  value="{{ old('feedback') }}"></textarea>
                </div>
                <button class="btn btn-primary" id="check_validate">Submit</button>

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
          $("#feedbackform").validate({
            rules: {
              name: "required",
              email: {
                required: true,
                email: true
              },
              feedback:"required"
            }
          });
        </script>  
 </section>

 
@endsection

