@extends('layout')

@section('title', 'Home - judicial Legal Intelligence')

@section('content')
<section class="position-relative py-8 py-md-11 mb-9 section-1">
                  <div class="shape shape-fluid-x shape-blur-1 svg-shim text-green-200">
                     <svg id="sw-js-blob-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                           <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                              <stop id="stop1" stop-color="rgba(110.396, 45.991, 134.508, 1)" offset="0%"></stop>
                              <stop id="stop2" stop-color="rgba(81, 4, 66, 1)" offset="100%"></stop>
                           </linearGradient>
                        </defs>
                        <path fill="url(#sw-gradient)" d="M23.9,-33.2C31,-27.8,36.9,-20.8,39.5,-12.8C42.1,-4.8,41.5,4.2,38.8,12.6C36.1,21,31.3,28.7,24.5,34.2C17.6,39.6,8.8,42.8,0.5,42C-7.7,41.3,-15.5,36.6,-23.3,31.5C-31.2,26.4,-39.1,20.8,-42.3,13.2C-45.5,5.6,-44,-4.1,-40.6,-12.7C-37.2,-21.4,-31.8,-28.9,-24.8,-34.4C-17.7,-39.8,-8.8,-43,-0.2,-42.7C8.4,-42.4,16.8,-38.6,23.9,-33.2Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s;"></path>
                     </svg>
                  </div>
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-12 col-md-6 order-md-2" style="z-index:-1;">
                           <div class="img-skewed img-skewed-left mb-8 mb-md-0">
                              <img src="{{ asset('images/cover-1.jpg') }}" alt="search result" class="screenshot img-fluid mw-xl-130 aos-init" data-aos="img-skewed-item-left" data-aos-delay="100" style="box-shadow: 5px 6px 7px #8a8a8a54, -1em -15px 2em #90909057;">
                           </div>
                        </div>
                        <div class="col-12 col-md-6 order-md-1 aos-init" data-aos="fade-up">
                           <h1 class="display-3">
                              Welcome to the future<br>
                              <span class="text-primary">of legal intelligence</span>.
                           </h1>
                           <p class="lead text-muted mb-6 mb-md-8">
                              State trial court data - accessible for the first time! judicial is a comprehensive AI-powered state court research and analytics platform built by litigators for litigators.
                           </p>
                           <p class="lead text-muted mb-6 mb-md-8">What will you discover when you access the largest searchable database of state trial court records?</p>
                           <a href="/search" class="btn btn-primary mr-1 lift">
                           Start Searching For Free <i class="fe fe-arrow-right ml-3"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </section>
               <section class="py-8 py-md-11 border-bottom section-2">
                  <div class="container">
                  </div>
               </section>
@endsection
