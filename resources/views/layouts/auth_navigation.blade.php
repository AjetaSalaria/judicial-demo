<html>

    <head>
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/output.beb94680b546.css') }}" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/garamond/fonts.css') }}" />

    <link rel="canonical" href="https://judicial.law/rulings/judge:anderle%20AND%20%22wrongful%20termination%22/1" />
      
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style type="text/css">
        #footer ul li a:hover {
    color: #fff;
    }
    .header_logo{
        font-family:Playfair Display;
        font-size: 20px;
        color: black;
       
    }
    
    .judicial-sec {
        padding-top: 130px !important;
    }
    
    /*Header-css-start-here*/
    
    .common-navbar .container {
        max-width: 1040px;
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .common-navbar ul.navbar-nav li.nav-item a.nav-link {
        color: #000;
        font-size: 1rem;
        padding-right: 1.5rem !important;
        padding-left: 1.5rem !important;
        font-weight: 600;
        font-family: HelveticaNeueLTPro-Roman, Helvetica Neue, Helvetica, Arial, sans-serif !important;
    }
    
    .common-navbar ul.navbar-nav li.nav-item a.nav-link:hover{
          color: rgb(71, 37, 88);  
    } 
    
    .common-navbar form button.navbar-btn {
        background-color: rgba(71, 37, 88, 0.1);
        color: rgb(71, 37, 88) !important;
        padding: 0.5625rem 1rem;
        font-size: 1.0625rem;
        line-height: 1.6;
        border-radius: 0.375rem;
        font-weight: 600;
        font-family: HelveticaNeueLTPro-Roman, Helvetica Neue, Helvetica, Arial, sans-serif !important;
    }
    
    .common-navbar form button.navbar-btn:hover, .common-navbar form button.navbar-btn:focus{
         box-shadow: 0 1rem 2.5rem rgb(22 28 45 / 10%), 0 0.5rem 1rem -0.75rem rgb(22 28 45 / 10%) !important;
        -webkit-transform: translate3d(0, -3px, 0);
        transform: translate3d(0, -3px, 0);
    
    
        background-color: rgb(71, 37, 88);
        color: #fff !important;
        
    }
    
    nav.navbar.common-navbar {
        border-bottom: 1px solid #f1f4f8 !important;
        box-shadow: none;
        z-index: 1030;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        justify-content: flex-start;
        padding: 1.25rem 2em;
        -webkit-box-align: center;
        align-items: center;
         position: fixed;
         top:0;
         left:0;
         right:0;
        transition: all 0.2s ease-in-out;
    }
    
    .common-navbar a.navbar-brand.header_logo img.navbar-brand-img {
        max-height: 2.4rem;
        width: auto;
    }
    
    .common-navbar a.navbar-brand.header_logo {
        color: rgb(71, 37, 88);
        padding: 0;
    }
    /*Header-css-end-here*/
    
    </style>
    <head>
 <header class="judicialNav">
             <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom common-navbar">
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
                              <li class="nav-item">
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
               
        </header>
        <div class="container">
            @yield('content')
        </div>
    @include('layouts.footer')
    <script type="text/javascript">
        $("#navbarAccount").on('click',function(e){
            e.preventDefault();
            $('#dropdown-logout').toggle();
        })

    </script>
    </body>
</html>


