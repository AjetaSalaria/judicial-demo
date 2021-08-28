@extends('layouts.guest_navigation')
@section('title', 'Register - TranscriptMinnerSM') @section('content')
@section('content')
<div id="__next" style="position: relative;">
   <div class="container-fluid">
      <div class="row">
         <div class="col">
            
            <section class="section1___tJelh">
               <div class="sectionContent___Dyu4K lightTheme___3q3QE section1Content___1CI1- section1ContentBackground___1sILP">
                  <div class="loginFormHolder___36fEo loginFormHolderBackground___3svTq">
                     <form id="loginForm" class="loginForm___CkkGt loginForm___3jRhB" action="{{ route('register') }}" method="POST" autocomplete="off">
                      @csrf
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-12">
                                 <h1 class="d-none d-md-block title___2Px1E">User Registration</h1>
                                 <div class="row orDivider"></div>
                                 <div class="col-12 submitErrorMessage___l4g_6">&nbsp;</div>
                                 <div class="textFieldHolder___1kC-8">
                                    <label for="email" class="label___1YNLK textFieldLabel___lEyF6">Name
                                    </label>
                                    <div class="w-100 textInputHolder___2JutI">
                                      <input type="text" id="email" class="form-control" name="name" placeholder="Name" maxlength="50" autocomplete="off" class="w-100 textField___2SAzN" required autofocus>
                                      @if ($errors->has('email'))
                                          <span class="text-danger">{{ $errors->first('name') }}</span>
                                      @endif
                                    </div>
                                 </div>
                                 <div class="textFieldHolder___1kC-8">
                                    <label for="email" class="label___1YNLK textFieldLabel___lEyF6">Email</label>
                                    <div class="w-100 textInputHolder___2JutI">
                                       <input type="email" id="email" class="form-control" name="email" value="" placeholder="Email" maxlength="40" class="w-100 textField___2SAzN passwordHidden___1xcff" required autofocus>
                                      @if ($errors->has('email'))
                                          <span class="text-danger">{{ $errors->first('email') }}</span>
                                      @endif
                                    </div>
                                 </div>
                                 <div class="textFieldHolder___1kC-8">
                                    <label for="password" class="label___1YNLK textFieldLabel___lEyF6">Password</label>
                                    <div class="w-100 textInputHolder___2JutI">
                                       <input type="password" id="password" class="form-control" name="password" value="" placeholder="Password" maxlength="40" class="w-100 textField___2SAzN passwordHidden___1xcff" required autofocus>
                                      @if ($errors->has('password'))
                                          <span class="text-danger">{{ $errors->first('password') }}</span>
                                      @endif
                                    </div>
                                 </div>
                                 <div class="textFieldHolder___1kC-8">
                                    <label for="password_confirmation" class="label___1YNLK textFieldLabel___lEyF6">Confirm Password</label>
                                    <div class="w-100 textInputHolder___2JutI">
                                       <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" value="" placeholder="Confirm Password" maxlength="40" class="w-100 textField___2SAzN passwordHidden___1xcff" required autofocus>
                                      @if ($errors->has('password_confirmation'))
                                          <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                      @endif
                                    </div>
                                 </div>
                                 <div class="d-flex justify-content-between justify-content-md-start align-items-center submitHolder___1i_fL">
                                    <div class="container-fluid">
                                       <div class="row align-items-center">
                                          <div class="col-12 d-flex justify-content-md-center">
                                             <div class="ml-auto">
                                                <button type="submit" class="navbar-btn btn btn-sm btn-primary-soft lif">
                                                  Register
                                              </button>
                                             </div>
                                             <div class="spinner-border spinner-border-sm text-light" role="status">
                                                <span class="sr-only">Loading...</span>
                                             </div>
                                             </button>
                                          </div>
                                          <div class="col-12 d-flex justify-content-center forgotPasswordHolder___28dXg">
                                             <!--<a href="/password-reset" class="forgotPassword___1CmgP">-->
                                             <!--Forgot password?-->
                                             <!--</a>-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
</div>
@endsection