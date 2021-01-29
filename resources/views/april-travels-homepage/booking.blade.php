<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels Limited
    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/styles/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/styles/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha256-Z8TW+REiUm9zSQMGZH4bfZi52VJgMqETCbPFlGRB1P8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha256-ZvMf9li0M5GGriGUEKn1g6lLwnj5u+ENqCbLM5ItjQ0=" crossorigin="anonymous"></script>
   <style>
    .contact__bg {
        height: 39vh;
    }
    </style>
</head>
<body>
        @include('sweet::alert')
    <div class="">
        <div class="header__top--show">
            <div>
                <img src="../assets/images/fixedhamburger.png" alt="button" class="header__column--toggler">
                <a href="{{url('/')}}">
                    <img src="../assets/images/missionlg.png" alt="" class="header__column--logo">
                </a>
                <a href="{{url('/')}}">
                    <img src="../assets/images/fixedimgtext.png" alt="" class="header__column--text fixed">
                </a>
            </div>
            <div class="header__top--fixed-right">
                <img src="{{asset('assets/images/iatalogo.png')}}" class="header__iata" alt="">
                <img src="../assets/images/nanta.png" alt="" class="header__nanta">

            </div>

        </div>
        <div class="bg__inactive">
            <div class="header__menu header__menu--index">
                <!-- <img src="./assets/images/closeicon.svg" class="header__menu--close" style="transition: all 0.5s ease-in-out 0s;" alt=""> -->
                <div class="header__menu--close"></div>
                <div class="header__menu--wrapper">
                    <a href="{{url('/')}}" class="header__menu--container">
                        <img src="../assets/images/homeicon.png" alt=""> <span class="header__menu--link" >
                            HOME</span>
                    </a>
                    <a href="{{url('/about-us/')}}" class="header__menu--container">
                        <img src="../assets/images/abouticon.png" alt="">
                        <span  class="header__menu--link"> ABOUT
                    </span>
                    </a>
                    <a href="{{url('/deals/')}}" class="header__menu--container">
                        <img src="../assets/images/dealsicon.png" alt=""><span 
                            class="header__menu--link"> DEALS
                            &amp; OFFERS</span>
                    </a>
                    <a href="{{url('/contact-us/')}}" class="header__menu--container active">
                        <img src="../assets/images/phonebookicon.png" alt=""> 
                        <span class="header__menu--link">CONTACT </span>
                    </a>
                    <a href="{{url('/faq/')}}" class="header__menu--container">
                        <img src="../assets/images/faqicon.png" alt=""><span class="header__menu--link">
                            FAQ'S</span>
                    </a>
                    <br>
                    <p class="green-text header__sub--text">09-6710003</p>
                    <p class="green-text header__sub--text">09-6720003</p>
                    <p class="green-text header__sub--text">fly@apriltravelsng.com</p>
                    <img src="../assets/images/descbg.png" alt="" class="header__menu--bg-bottom">

                </div>
            </div>
        </div>


    </div>
    <div>
        <div class="header__top--fixed">
            <div>
                <img src="../assets/images/fixedhamburger.png" alt="button" class="header__column--toggler">
                <img src="../assets/images/missionlg.png" alt="" class="header__column--logo">
                <img src="../assets/images/fixedimgtext.png" alt="" class="header__column--text">
            </div>
            <div class="header__top--flex-right">
                <img src="../assets/images/iatalogo.png" class="header__iata" alt="">
                <button type="button" value="contact" class="header__fixed--button">CONTACT US</button>
            </div>

        </div>
        <header class="contact__bg">
           
        </header>
    </div>
    <div class="sub_modal contact_modal--show" style="height: auto; overflow: auto;">
        <div class="contact_modal_inner--two">
            <div class="contact_modal__content">
                <h2>Flight Passenger Information</h3>

                <form action="{{url(Session::get('booking') == 'one_way' ? '/post-booking/' : '/post-multiplebooking/')}}"  method="POST" class="contact_modal__body">
                    <h6 >
                        * Note: <span style="font-weight: 100;" >
                                    All informations provided must correspond with your International Passport details
                                </span> 
                    </h6>
                    <small style="color:firebrick;">@error('first_name'){{$message}}@enderror</small>
                    <small style="color:firebrick;">@error('middle_name'){{$message}}@enderror</small>
                    <small style="color:firebrick;">@error('surname'){{$message}}@enderror</small>
                    <small style="color:firebrick;">@error('email'){{$message}}@enderror</small>
                    <small style="color:firebrick;">@error('address'){{$message}}@enderror</small>
                    <small style="color:firebrick;">@error('phone'){{$message}}@enderror</small>

                    @csrf
                        <div class="input_section">
                 
                            <input type="text" name="first_name" placeholder="First name" class="" value="{{ old('first_name') }}">
                            <input type="text" name="middle_name" placeholder="Middle name" class=""value="{{ old('middle_name') }}">
                            <input type="text" name="surname" placeholder="Surname" class=""value="{{ old('surname') }}">
                            <input type="text" name="dob" placeholder="Date of Birth (optional)" class=""value="{{ old('dob') }}">
                            <input type="email" name="email" placeholder="Email address" class=""value="{{ old('email') }}">
                            <input type="text" name="address" placeholder="Address (Street, City, Country)" class=""value="{{ old('address') }}">
                            <input type="number" name="phone" placeholder="Phone number" class=""value="{{ old('phone') }}">
                            <input type="text" name="passport_id" placeholder="Passport ID (optional)" class=""value="{{ old('passport_id') }}">
                            <!-- <input type="text" name="" placeholder="Country" class=""> -->
                            <!-- <input type="text" name="" placeholder="Purpose of Visit" class=""> -->
                        </div>
                        <button class="header__form--submit orange-btn">Submit</button>
                        {{-- <a value="submit" class="header__form--submit orange-btn">Submit</a> --}}
                   
                </form>
    
    
            </div>
        </div>
    </div>
    <footer class="footer footer__location">
        <div class="footer__overlay">
            <!-- <a href="#" class="footer__overlay--logo"> -->
            <img src="assets/images/footerlg.png" alt="">
            <!-- </a> -->
            <h4 class="footer__overlay--text">
                APRIL TRAVELS LTD.
            </h4>
            <h3 class="footer__overlay--hero">No better time
                <br>to start travelling <br> but now</h3>
            <button class="footer__overlay--btn orange-btn">BOOK NOW</button>
        </div>
        <div class="footer__main">
            <div>
                <a href="{{url('/')}}" class="footer__main--link">
                    HOME
                </a>
                <a href="{{url('/about-us/')}}" class="footer__main--link">
                    ABOUT APRIL TRAVELS
                </a>
                <!-- <a href="faq.html" class="footer__main--link">
                    WHY 
                </a> -->
                
            </div>
            <div class="footer__main--right">
                <h6>DEVELOPED BY</h6>    
            </div>
        </div>
        <div>
            <div class="footer__copyright">
                <h4 class="footer__copyright--text">All Rights Reserved to APRIL TRAVELS LTD. ©
                    <script type="text/javascript">document.write(new Date().getFullYear());</script>
                </h4>
            </div>
        </div>
</footer>
    <script src="../assets/scripts/header.js"></script>
    <script src="../assets/scripts/faq.js"></script>
    <script src="../jquery.min.js"></script>

</body>
</html>



