@extends('layouts.guest_navigation')

@section('title', 'Home - TranscriptMinerSM')

@section('content')
<section class="position-relative py-8 py-md-11 mb-9 section-1 home_container">
                  <div class="container">
                     <div class="row">
                        <div class="col-12 col-md-6 order-md-2" style="z-index:-1;">
                           <div class="img-skewed img-skewed-left mb-8 mb-md-0">
                              <img src="{{ asset('images/cover-1.jpg') }}" alt="search result" class="screenshot img-fluid mw-xl-130 aos-init" data-aos="img-skewed-item-left" data-aos-delay="100" style="box-shadow: 5px 6px 7px #8a8a8a54, -1em -15px 2em #90909057;width:100%; /*transform: rotateY(358deg) rotateX(1deg) translate3d(0, 0, 0); -webkit-transform: rotateY(358deg) rotateX(1deg) translate3d(0, 0, 0);*/
                                  transform: none;
                                  -webkit-transform:none;
                              ">
                           </div>
                        </div>
                        <div class="col-12 col-md-6 order-md-1 aos-init" data-aos="fade-up">
                           <h1 class="display-5 top-heading">
                              This is the next step in <br>
                              <span class=" top-heading ">legal research.</span>
                           </h1>
                           <p class="lead text-muted mb-2 mb-md-3">
                              Now: There is no way to find transcripts unless you know what hearing you’re looking for (or you review many random transcripts)—so we don’t know what we don’t know. To find something useful in transcripts you go through them one at a time, and you have to use CTRL-F.  Tedious, manual and time-consuming.

                           </p>
                           <p class="lead text-muted mb-2 mb-md-3">Using the TranscriptMiner<sup>SM</sup> database, you can efficiently search across a judge’s statements from the time they took the bench—using sophisticated search functions.</p>
                           <p class="lead text-muted text-center mb-2 mb-md-3">“This is Westlaw for transcripts!” 
                              <p class="text-center pr-3"> – David Seligman </p> </p> 
                           <p class="lead text-muted mb-2 mb-md-3">Future versions will incorporate other analytical tools allowing you to gain insights about what the judges you appear before said, and how they think.  You can’t currently get these insights anywhere else.
                           </p>        
                           <div class="d-flex flex-column home-legal-research-btns">
                           <a href="/readme" class="btn btn-primary mr-1 mb-2 lift w-50 ">
                             Read Me    
                           <i class="fas fa-chevron-right ml-1" style="color: #fff !important;"></i>
                           
                           </a>
                           <a href="/login" class="btn btn-primary mr-1 mb-2 lift w-50 ">
                           Search 
                           <i class="fas fa-chevron-right ml-1" style="color: #fff !important;"></i>
                           </a>
                           
                           <a href="/feedback" class="btn btn-primary mr-1 mb-2 lift w-50 ">
                           Feedback
                           <i class="fas fa-chevron-right ml-1" style="color: #fff !important;"></i>
                           </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
               <!--<section class="py-8 py-md-11 border-bottom section-2">-->
               <!--   <div class="container">-->
               <!--   </div>   -->
               <!--</section>  -->
@endsection