<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April-Travels - Contact KJK 

    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/admin.css" />
    <link rel="stylesheet" href="assets/fonts/AvenirLTStd-Black.otf">
    <style type="text/css">
        a:focus, a:hover {
            color: #FF5E16;
            text-decoration: none;
        }
    </style>
    <script src="assets/scripts/admin.js"></script>
</head>

<body>
@include('sweet::alert')
    <div class="page">
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
                            
                            {{-- <div>Log Out</div> --}}
                            <a  class="logout-btn" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                              
                              <span class="icon icon--logout">
                                  &nbsp;  <img style="transform: translateY(12px);" src="{{asset('assets/backendImages/logouticon.png')}}" alt=""
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
                    <div class="header__group" style="transform: translateX(-75px);">
                        <!-- <a href="" class="header__link">
                            <img src="assets/images/notification.png" alt="" class="header__link-img">
                        </a> -->
                        <a href="" class="header__link">
                            <img src="{{asset('assets/backendImages/user.svg')}}" alt="" class="avatar">
                            <span class="text text--small text--black text--bold">
                                <span class="orange__text">Hello </span> {{Auth::user()->name}}
                                <span class="text"></span>
                            </span>
                            &nbsp;&nbsp;
                            <a href="">
                                <img style="position: static;" src="{{asset('assets/backendImages/sign-out.svg')}}" alt=""
                                class="header__link-img header__link-img--small">
                            </a>
                            
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-body__content">

                    <div class="contact xpad">
                        <form action="{{url('/sendmail/')}}" class="contact__form" method="POST">
                            @csrf
                            <label for="subject">Subject :</label><br>
                            <input type="text"  name="subject" id="name"><br>
                            {{-- <label for="email">Email</label><br>
                            <input type="email"  id="email"><br> --}}
                            <label for="message">Message :</label><br>
                            <textarea class="contact__box" name="body" rows="6" column="10" id="message"></textarea><br>
                            <button class="contact__btn orange-btn">SEND MESSAGE</button>
                        </form>
                        <div class="contact__info">
                            <div>
                                <img src="{{asset('assets/images/kjklogo.png')}}">
                            </div>
                            <div class="contact__email">
                                <p> kjk@africa.com </p>
                            </div>
                            <div class="contact__phone">
                                <!-- <img src="assets/images/callicon.png" alt=""> -->
                                <p> 08126261152</p>
                            </div>
                            <div class="contact__location">
                                <!-- <img src="assets/images/geoicon.png" alt=""> -->
                                <p>Block 36, Glover Estate,Adekunle, Yaba, Lagos.</p>
                            </div>
                            <div>
                                <p class="contact__sub--desc" >Follow us on our Social Media Pages </p>
                            </div>
                            <div class="contact__medias" >
                                <a href="facebook.com/kjkcomng">
                                    <img src="assets/images/facemini.png" alt="">
                                </a>
                                <a href="kjk.africa">
                                    <img src="assets/images/igsmall.png" alt="">
                                </a>
                                <a href="twitter.com/kjk.africa">
                                    <img src="assets/images/twitmini.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

            </div>

        
        </div>

    </div>



    <script src="assets/scripts/admin.js"></script>



</body>





</html>