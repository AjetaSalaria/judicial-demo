<html>
    <head>
        <title>Home - Legal Intelligence</title>
        <meta charSet="UTF-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
        <script type="04c1a5878af86805c5ea1c00-text/javascript" src="/environment_keys"></script>
        <meta name="description" content="Experience the most powerful legal research and analytics platform" />
        <meta name="next-head-count" content="5" />
        <link rel="icon" href="/static/favicon.ico" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="texcss" charSet="UTF-8" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />
        <link rel="stylesheet" href="{{ asset('css/theme.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/themes.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/form.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="{{ asset('css/feather.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/marketing.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/judicial_modal.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/output.d476468f597f.css') }}" type="text/css" />
        <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
        <script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="04c1a5878af86805c5ea1c00-|49" defer=""></script>
        <script type="04c1a5878af86805c5ea1c00-text/javascript">
            AOS.init({
                duration: 1000
            });
            // If Authenticated, Set User Script Var
            var IS_AUTHENTICATED = false;
            var judicialUser = undefined;
            var IS_SUBSCRIBED = false;
        </script>
    </head>
    <body>
        <div id="__next" style="position: relative;">
      <div class="container-fluid">
         <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                  <div class="container">
                     <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo.png') }}" class="navbar-brand-img" alt="ContentMiner"/>
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarCollapse">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-x"></i>
                        </button>
                        <ul class="navbar-nav ml-auto">
                           <li class="nav-item">
                              <a class="nav-link" id="navbarLandings" role="button" href="/" aria-haspopup="true" aria-expanded="false">
                              Home
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="navbarPages" role="button" href="{{url('/pricing')}}" aria-haspopup="true" aria-expanded="false">
                              Pricing
                              </a>
                           </li>
                           <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" id="navbarAccount" data-toggle="dropdown" href="{{url('/coverage')}}" aria-haspopup="true" aria-expanded="false">
                              Coverage
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarAccount">
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" href="{{url('/california')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    California
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" role="button" aria-haspopup="true" aria-expanded="false" href="{{url('/delaware')}}">
                                    Delaware
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" href="{{url('/florida')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Florida
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" role="button" aria-haspopup="true" aria-expanded="false" href="{{url('/illinois')}}">
                                    Illinois
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" href="{{url('/massachusetts')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Massachusetts <span class="h6 text-uppercase text-primary align-self-center ml-1 mb-0">(new)</span>
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" role="button" aria-haspopup="true" aria-expanded="false" href="{{url('/nevada')}}">
                                    Nevada
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" href="{{url('/new york')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    New York
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" href="{{url('/pennsylvania')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Pennsylvania <span class="h6 text-uppercase text-primary align-self-center ml-1 mb-0">(new)</span>
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" href="{{url('/texas')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Texas
                                    </a>
                                 </li>
                                 <li class="dropdown-item dropright">
                                    <a class="dropdown-link" href="{{url('/washington')}}" role="button" aria-haspopup="true" aria-expanded="false">
                                    Washington <span class="h6 text-uppercase text-primary align-self-center ml-1 mb-0">(new)</span>
                                    </a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" role="button" href="{{url('/about')}}" aria-haspopup="true" aria-expanded="false">
                              About us
                              </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" role="button" href="{{url('/contact')}}" aria-haspopup="true" aria-expanded="false">
                              Contact us
                              </a>
                           </li>
                        </ul>
                        <div class="ml-auto">
                            @auth
                              <a class="navbar-btn btn btn-sm btn-primary-soft lift" href="{{url('/logout')}}" role="button">
                           Logout</a>
                              @else
                              <a class="navbar-btn btn btn-sm btn-primary-soft lift" href="{{url('/login')}}" role="button">
                           Login</a>
                            @endauth

                        </div>
                     </div>
                  </div>
               </nav>


            @yield('content')
        {{-- </div> --}}
@if (Request::path() != 'login')
     <div class="footerHolder___2JfG_  footer_marketing">

<footer id="footer" class="page-footer hide-on-print">

<div class="container footer-container">
<div class="row justify-content-center justify-content-md-start text-center text-md-left">
<div class="col-lg-3 ml-lg-auto mb-8 mb-lg-0 text-left">

<img class="brand" src="{{url('images/logo.png') }}" alt="Logo">

<ul class="list-inline mb-0 social-footer">
<li class="list-inline-item">
<a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="https://www.linkedin.com/company/judicial-law" aria-label="Linkedin">
<i class="fab fa-linkedin fa-2x"></i>
</a>
</li>
<li class="list-inline-item">
<a class="btn btn-xs btn-icon btn-soft-secondary rounded" href="https://twitter.com/judicial_law" aria-label="Twitter">
<i class="fab fa-twitter fa-2x"></i>
</a>
</li>
</ul>

</div>   @if (Request::path() != 'login')
         <div class="col-6 col-md-3 col-lg mb-5 mb-lg-0 text-left">
         <h5 class="text-white">Features</h5>

         <ul class="nav nav-sm nav-x-0 nav-white flex-column">
         <li class="nav-item">
         <a class="nav-link" href="/search">
         <span class="media align-items-center">
         <span class="media-body">Smart Search</span>
         </span>
         </a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="/judges">
         <span class="media align-items-center">
         <span class="media-body">Judge Analytics</span>
         </span>
         </a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="/ca/motion-type">
         <span class="media align-items-center">
         <span class="media-body">Motion & Issues</span>
         </span>
         </a>
         </li>
         <li class="nav-item">
         <a class="nav-link" href="/coverage">
         <span class="media align-items-center">
         <span class="media-body">State Coverage</span>
         </span>
         </a>
         </li>
         </ul>

         </div>
         @endif
<div class="col-6 col-md-3 col-lg mb-5 mb-lg-0 text-left">
<h5 class="text-white">Company</h5>

<ul class="nav nav-sm nav-x-0 nav-white flex-column">
<li class="nav-item"><a class="nav-link" href="/"> <span class="media align-items-center">
<span class="media-body">Home</span>
</span></a></li>
<li class="nav-item"><a class="nav-link" href="/about"> <span class="media align-items-center">
<span class="media-body">About</span>
</span></a></li>
<li class="nav-item"><a class="nav-link" href="/contact"> <span class="media align-items-center">
<span class="media-body">Contact us</span>
</span></a></li>
<li class="nav-item"><a class="nav-link" href="/plans"> <span class="media align-items-center">
<span class="media-body">Pricing</span>
</span></a></li>
</ul>

</div>
<div class="col-6 col-md-3 col-lg text-left">
<h5 class="text-white">Resources</h5>

<ul class="nav nav-sm nav-x-0 nav-white flex-column">
<li class="nav-item"><a class="nav-link" href="https://blog.judicial.law/">
<span class="media align-items-center">
<span class="media-body">Blog</span>
</span>
</a>
</li>
<li class="nav-item"><a class="nav-link" href="https://support.judicial.law">
<span class="media align-items-center">
 <span class="media-body">Support & FAQ</span>
</span>
</a>
</li>
<li class="nav-item"><a class="nav-link" href="/faq/credits">
<span class="media align-items-center">
<span class="media-body">Credit System FAQ</span>
</span>
</a>
</li>
</ul>

</div>
<div class="col-12 mt-3">
<hr class="opacity-xs my-0">
<div class="container space-1">
<div class="row align-items-md-center mb-7">
<div class="col-md-6 mb-4 mb-md-0 pl-0">

<ul class="nav nav-sm nav-white nav-x-sm align-items-center">
<li class="nav-item">
<a class="nav-link" href="/privacy-policy">Privacy &amp; Policy</a>
</li>
<li class="nav-item opacity mx-3">/</li>
<li class="nav-item">
<a class="nav-link" href="/terms-of-service">Term of Service</a>
</li>
<li class="nav-item opacity mx-3">/</li>
<li class="nav-item">
<a class="nav-link" href="/public-records">Public Records</a>
</li>
</ul>

</div>
<div class="col-sm-6 w-md-75 text-lg-right mx-lg-auto">
<p class="text-white opacity-sm small mt-3">© 2021 All Rights Reserved.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>
</div>
@endif

</div>
</div>
</div>
</div>
</div>
            </div>
         </div>
      </div>
<script type="04c1a5878af86805c5ea1c00-text/javascript" src="/static/global/popper-1.14.3.min.js"></script>
<script type="04c1a5878af86805c5ea1c00-text/javascript" src="/static/global/jquery-3.3.1.min.js"></script>
<script type="04c1a5878af86805c5ea1c00-text/javascript" src="/static/global/bootstrap-4.1.1/js/bootstrap.min.js"></script>
<script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="/static/marketing/js/landkit/libs/countup.js/dist/countUp.min.js" type="04c1a5878af86805c5ea1c00-text/javascript"></script>
<script type="04c1a5878af86805c5ea1c00-text/javascript" src="/static/marketing/js/landkit/typed.min.js"></script>
<script type="04c1a5878af86805c5ea1c00-text/javascript" src="/static/marketing/js/landkit/theme.min.js"></script>

<script type="04c1a5878af86805c5ea1c00-text/javascript" src="/static/global/js/global.js"></script>
<script type="04c1a5878af86805c5ea1c00-text/javascript" src="/static/marketing/js/index.js"></script>
<script type="04c1a5878af86805c5ea1c00-text/javascript">
        AOS.init({
            duration: 1000
        });


            // If Authenticated, Set User Script Var
            var IS_AUTHENTICATED = false;
            var judicialUser = undefined;



            var IS_SUBSCRIBED = false;

    </script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="04c1a5878af86805c5ea1c00-|49" defer=""></script></body>
</html>
