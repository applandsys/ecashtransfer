<header class="header-wrap style1">
            <div class="header-top">
               <button type="button" class="close-sidebar">
               <i class="ri-close-fill"></i>
               </button>
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-8 col-md-12">
                        <div class="header-top-left">
                           <ul class="contact-info list-style">
                              <li><i class="flaticon-call"></i> <a href="tel:02459271449">(+024) 592 71 449</a></li>
                              <li><i class="flaticon-email-1"></i> <a href="mail:suport@ecashtransfer.com"><span class="__cf_email__" data-cfemail="d4bcb1b8b8bb94a6b5acb5fab7bbb9">support@ecashtransfer.com</span></a></li>
                              <li>
                                 <i class="flaticon-pin"></i>
                                 <p>St. Here Mandalay, New York, U.K</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-12">
                        <div class="header-top-right">
                           <ul class="header-top-menu list-style">
                              <li><a href="contact.html">Support</a></li>
                              <li><a href="contact.html">Help</a></li>
                           </ul>
                           <div class="select-lang">
                              <i class="ri-global-line"></i>
                              <div class="navbar-option-item navbar-language dropdown language-option">
                                 <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span class="lang-name"></span>
                                 </button>
                                 <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                    <img src="{{asset('front_template/assets/img/uk.png')}}" alt="flag">
                                    English
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-bottom">
               <div class="container">
  
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="index.html">
                     <img class="logo-light" src="{{asset('front_template/assets/img/logo.png')}}" alt="logo" width="250px">
                     <img class="logo-dark" src="{{asset('front_template/assets/img/logo.png')}}" alt="logo" width="250px">
                     </a>
                     <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                        <div class="menu-close xl-none">
                           <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                        @guest
                           <li class="nav-item  has-dropdown">
                              <a href="#" class="nav-link active">
                              Home
                              </a> 
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">
                              About Us
                              </a>
                           </li>
          
                           <li class="nav-item">
                              <a href="#" class="nav-link">Contact Us</a>
                           </li>

                           <li class="nav-item">
                           <a href="{{route('front.loginaccount')}}" class="nav-link">Login</a>
                           </li>

                           <li class="nav-item xl-none">
                              <a href="{{route('front.openaccount')}}" class="btn style1">Open Account</a>
                           </li>
                           @else

                           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                           @endguest
                        </ul>
                        @guest
                           <div class="others-options  lg-none">
                              <div class="header-btn lg-none">
                                 <a href="{{route('front.openaccount')}}" class="btn style1">Open Account</a>
                              </div>
                           </div>
                        @else
                        <div class="others-options  lg-none">
                              <a class="btn btn-danger" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                              </form>
                        </div>
                        @endguest
                     </div>
                  </nav>
             
                  <div class="mobile-bar-wrap">
                     <div class="mobile-sidebar">
                        <i class="ri-menu-4-line"></i>
                     </div>
                     <button class="searchbtn xl-none" type="button">
                     <i class="flaticon-search"></i>
                     </button>
                     <div class="mobile-menu xl-none">
                        <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                     </div>
                  </div>
               </div>
               <div class="search-area">
                  <div class="container">
                     <form action="#">
                        <div class="form-group">
                           <input type="search" placeholder="Search Here" autofocus>
                        </div>
                     </form>
                     <button type="button" class="close-searchbox">
                     <i class="ri-close-line"></i>
                     </button>
                  </div>
               </div>
            </div>
         </header>