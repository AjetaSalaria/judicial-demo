<html>
    <head>
        <title>@yield('title')</title>
        @section('title', 'About - TranscriptMinerSM')

        <meta charSet="UTF-8" />
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
        {{-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> --}}
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
            <link rel="stylesheet" href="{{ asset('css/garamond/fonts.css') }}" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="{{ asset('css/feather.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/marketing.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/trellis_modal.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/output.d476468f597f.css') }}" type="text/css" />
        <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
        <script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script type="04c1a5878af86805c5ea1c00-text/javascript" src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="04c1a5878af86805c5ea1c00-|49" defer=""></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="04c1a5878af86805c5ea1c00-text/javascript">
            AOS.init({
                duration: 1000
            });
            // If Authenticated, Set User Script Var
            var IS_AUTHENTICATED = false;
            var trellisUser = undefined;
            var IS_SUBSCRIBED = false; 
        </script>
    
        <style type="text/css">
         /* .home_container{
      background-image: url(../images/home-banner-img.svg) !important;
      background-repeat: no-repeat !important;
      background-position: right -200px top 10px !important;
   }*/
                  #footer ul li a:hover {
                      color: #fff;
                  }
                  
                  #footer{
                      background:rgb(71, 37, 88);
                  }
                  .top-heading{
                    font-family: "Garamond";
                   }
                  #success_msg {
                      color: #155724;
                     border-color: #c3e6cb;
                      background-color: #d4edda;
                  }
                  .msg{
                      color:red;
                      font-size:20px;
                  }
                  .error{
                     color: red;
                  }
                  .home_container .img-skewed.img-skewed-left img {
                      margin-top: 180px;
                      /*position: relative;*/
                     }

                  .home_container .img-skewed.img-skewed-left{
                     position: relative;
                  }

                  .home_container .img-skewed.img-skewed-left::after {
                   position: absolute;
                   content: "";
                   background-image: url(./images/home-banner-img.svg) !important;
                   background-repeat: no-repeat !important;
                   background-position: right -200px top 10px !important;
                   z-index: -1;
                   top: 0;
                   bottom: -310px;
                   left: 0;
                   right: -220px;
               }
               
               .header_logo{
                    font-family:Playfair Display;
                    font-size:20px;
                }
          
          .home_container .aos-init.aos-animate p.lead {
                font-family: HelveticaNeueLTPro-Roman, Helvetica Neue, Helvetica, Arial, sans-serif !important;
                font-size: 17px;
                font-weight: 400;
                line-height: 1.6;
                color: #161c2d !important;
            }
            
            .feedback-sec button.btn.btn-primary:hover {
                background: rgb(71, 37, 88) !important;
            }
            
            .contact-sec a {
                color: rgb(71, 37, 88);
            }
            
            .navbar-light .navbar-brand {
                color: rgb(71, 37, 88) !important;
            }
            
            .navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
                color: rgb(71, 37, 88) !important;
            }
            
            .navbar-collapse .btn-primary-soft {
                color: rgb(71, 37, 88) !important;
            }
            
            .navbar-collapse .btn-primary-soft:hover {
                background-color: rgb(71, 37, 88) !important;
                color:#fff !important;
            }
            .home-legal-research-btns a.btn.btn-primary:hover {
            background-color: rgb(71, 37, 88) !important;
                }

        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <div id="__next" style="position: relative;">
      <div class="container-fluid">
         <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                  <div class="container">
                     <a class="navbar-brand header_logo" href="/">
                        <img src="{{ asset('images/logo.png') }}" class="navbar-brand-img" alt="ContentMiner"/>
                        TranscriptMiner<sup>SM</sup>
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarCollapse">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-x"></i>
                        </button>
                        
                           <ul class="navbar-nav ml-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" id="navbarLandings" role="button" href="/" aria-haspopup="true" aria-expanded="false">
                                 Home
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="navbarPages" role="button" href="{{url('/readme')}}" aria-haspopup="true" aria-expanded="false">
                                 Read Me
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" role="button" href="{{url('/about-us')}}" aria-haspopup="true" aria-expanded="false">
                                 About Us
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" role="button" href="{{url('/contact-us')}}" aria-haspopup="true" aria-expanded="false">
                                 Contact Us
                                 </a>
                              </li>
                              <!-- <li class="nav-item">-->
                              <!--   <a class="nav-link" id="navbarPages" role="button" href="{{url('/pricing')}}" aria-haspopup="true" aria-expanded="false">-->
                              <!--   Pricing-->
                              <!--   </a>-->
                              <!--</li>-->
                           </ul>
                        <div class="ml-auto">
                           
                            @auth
                                 <form action="/logout" method="post" class="mb-0">
                                    @csrf
                                   <button class="navbar-btn btn btn-sm btn-primary-soft lift" role="button">
                                       Logout
                                   </button>
                                 </form>
                              @else
                              <a class="navbar-btn btn btn-sm btn-primary-soft lift" href="{{url('/login')}}" role="button">
                                 Login
                              </a>
                               <a class="navbar-btn btn btn-sm btn-primary-soft lift" href="{{url('/register')}}" role="button">
                                 Register
                              </a>
                            @endauth
                           
                        </div>
                     </div>
                  </div>
               </nav>
            @yield('content')
        {{-- </div> --}}
@if (Request::path() != 'login')
     <div class="footerHolder___2JfG_  footer_marketing">
@include('layouts.footer')
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
            var trellisUser = undefined;
        

        
            var IS_SUBSCRIBED = false;
        
    </script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="04c1a5878af86805c5ea1c00-|49" defer=""></script></body>
</html>