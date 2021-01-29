<div class="side-navigation side-navigation__bar">
            <div class="side-navigation__lower-content">
                <div class="side-navigation__group-icon-container">
                    <a href="" class="side-navigation__menu-link">
                        <img src="{{asset('assets/backendImages/doticon.png')}}" alt="" class="side-navigation__menu-icon">
                    </a>
                    <hr>
                    <a href="{{url('/admin')}}" class="side-navigation__menu-link side-navigation__menu-link--active">
                        <img src="{{asset('assets/backendImages/homeicon2.png')}}" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div style="font-family: Avenir LT Std">Home</div>
                    </a>
                    <hr>
                    <a href="{{url('/all-deals')}}" class="side-navigation__menu-link ">
                        <img src="{{asset('assets/backendImages/planeicon.png')}}" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Flight Deals</div>
                    </a>
                    <hr>
                    <a href="{{url('/upadte-password/'.auth()->user()->id)}}" class="side-navigation__menu-link">
                        <img src="{{asset('assets/backendImages/lockicon.png')}}" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Password</div>
                    </a>
                    <hr>
                    <a href="{{url('/contact-developer/')}}" class="side-navigation__menu-link">
                        <img src="{{asset('assets/backendImages/phoneicon.png')}}" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Contact Us</div>
                    </a>
                    <hr>
                    <a href="{{url('/')}}" class="side-navigation__menu-link">
                        <img src="{{asset('assets/backendImages/undoicon.png')}}" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Return to Main Site</div>
                    </a>
                    <hr>
                    <div>
                            
                            <a class="logout-btn" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                              
                              <span class="icon icon--logout">
                                  &nbsp;  <img src="{{asset('assets/backendImages/logouticon.png')}}" alt=""
                                class="side-navigation__menu-icon side-navigation__menu-icon--small">
                                </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                               
                            </form>
                        
                        
                    </div>

                </div>
            </div>

        </div>

        <div class="main-body">
            <div class="header">
                <div class="row header__container">
                    <div class="header__logo">
                        <img src="{{asset('assets/backendImages/aprillg.png')}}" alt="" style="width:25%;">
                        <img src="{{asset('assets/backendImages/apriltitle.png')}}" alt="">
                    </div>
                    <form action="" class="search">
                        <img src="{{asset('assets/backendImages/searchicon.png')}}" alt="" class="search__img">
                        <input type="text"name="search"  class="search__input typeahead" placeholder="Search for something">
                    </form>
                    <div class="header__group">
                       
                            <img src="{{asset('assets/backendImages/user.svg')}}" alt="" class="avatar">
                            <span class="text text--small text--black text--bold">
                                <span class="orange__text">Hello </span> {{Auth::user()->name}}
                                <span class="text"></span>
                            </span>
                            &nbsp;&nbsp;
                            <a class="logout-btn" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <img src="{{asset('assets/backendImages/sign-out.svg')}}" alt=""
                                class="header__link-img header__link-img--small">
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                               
                            </form>
                                
                    </div>
                </div>
            </div>