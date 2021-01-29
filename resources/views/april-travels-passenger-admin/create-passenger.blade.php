<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April-Travels - Passenger Class

    </title>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/admin.css" />
    <link rel="stylesheet" href="../assets/fonts/AvenirLTStd-Black.otf">
    <script src="../assets/scripts/admin.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha256-Z8TW+REiUm9zSQMGZH4bfZi52VJgMqETCbPFlGRB1P8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha256-ZvMf9li0M5GGriGUEKn1g6lLwnj5u+ENqCbLM5ItjQ0=" crossorigin="anonymous"></script>
<style>
    .input--field{
        width:500px;
        height:40px;
        background: #f4f5f8;
        border:0px;
        padding:10px;
    }

    .logout-btn{
      color:white;
      text-decoration:none;
  }
  .logout-btn:hover , .side-navigation__menu-link:hover{
      color:#fff;
      text-decoration:none;
  }

</style>
</head>

<body>
        @include('sweet::alert')
    <div class="page">
        <div class="side-navigation side-navigation__bar">
            <div class="side-navigation__lower-content">
                <div class="side-navigation__group-icon-container">
                    <a href="{{url('/all-passenger-class/')}}" class="side-navigation__menu-link">
                        <img src="../assets/backendImages/doticon.png" alt="" class="side-navigation__menu-icon">
                    </a>
                    <hr>
                    <a href="{{url('/admin/')}}" class="side-navigation__menu-link side-navigation__menu-link--active">
                        <img src="assets/backendImages/homeicon2.png" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Home</div>
                    </a>
                    <hr>
                    <a href="" class="side-navigation__menu-link ">
                        <img src="assets/backendImages/planeicon.png" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Flight Deals</div>
                    </a>
                    <hr>
                    <a href="" class="side-navigation__menu-link">
                        <img src="assets/backendImages/lockicon.png" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Password</div>
                    </a>
                    <hr>
                    <a href="" class="side-navigation__menu-link">
                        <img src="assets/backendImages/phoneicon.png" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Contact Us</div>
                    </a>
                    <hr>
                    <a href="{{url('/contact-us/')}}" class="side-navigation__menu-link">
                        <img src="assets/backendImages/undoicon.png" alt=""
                            class="side-navigation__menu-icon side-navigation__menu-icon--small">
                        <div>Return to Main Site</div>
                    </a>
                    <hr>
                    <div>
                        <a href="" class="side-navigation__menu-link">
                            <img src="assets/backendImages/logouticon.png" alt=""
                                class="side-navigation__menu-icon side-navigation__menu-icon--small">
                                <a class="logout-btn" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                  </a>
                                  <span class="icon icon--logout">
                                      &nbsp;  <img src="../assets/images/log_out.svg" height="20" alt="">
                                    </span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                   
                                </form>
                            </a>
                        </a>
                        
                    </div>

                </div>
            </div>

        </div>

        <div class="main-body">
            <div class="header">
                <div class="row header__container">
                    <div class="header__logo">
                        <img src="../assets/backendImages/aprillg.png" alt="" style="width:25%;">
                        <img src="../assets/backendImages/apriltitle.png" alt="">
                    </div>
                    <div class="search">
                        <img src="../assets/backendImages/searchicon.png" alt="" class="search__img">
                        <input type="text" class="search__input" placeholder="Search for something">
                    </div>
                    <div class="header__group">
                        <a href="" class="header__link">
                            <img src="../assets/images/notification.png" alt="" class="header__link-img">
                        </a>
                        <a href="" class="header__link">
                            <img src="../assets/backendImages/roundicon.png" alt="" class="avatar">
                            <span class="text text--small text--black text--bold">
                               {{Auth::user()->name}}
                                <span class="text"></span>
                            </span>
                            &nbsp;&nbsp;
                            <img src="../assets/images/down-arrow.png" alt=""
                                class="header__link-img header__link-img--small">
                        </a>
                    </div>
                </div>
            </div>

            <div class="deal__block--container">
                <div class="deals__container ppad">
                    <div>                        
                        <div class="deals__row xpad">
                            <p class="page__title">Create Passenegr Class </p>
                            <div class="deal__action--container">
                    
                            </div>
                        </div>
                        <hr>
                        <form  method="POST" action="{{url('/post-passenger-class/')}}"  enctype="multipart/form-data" class="deals__row xpad">
                            @csrf
                            <input type="text" class="input--field" name="name" placeholder="Name"/>
                            &nbsp;
                            &nbsp;
                            <div class="deal__action--container">
                                <button class="edit__btn">Save </button>
                        
                            </div>
                        </form>
                        <hr>
                      
                        
                    </div>
                </div>
            </div>

            <!-- <button class="submit__button" type="submit">Return to Main Site</button> -->

        </div>

    </div>



    <script src="../assets/scripts/admin.js"></script>



</body>





</html>