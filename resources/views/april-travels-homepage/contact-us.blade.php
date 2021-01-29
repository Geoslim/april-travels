<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels Limited
    </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <style type="text/css">
        input {
            margin-bottom: 4px;
        }
    </style>
 
    <!-- endbuild -->
    <!-- build:js assets/scripts/Vendor.js -->
    <script src="temp/scripts/Vendor.js"></script>
    <!-- endbuild -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha256-Z8TW+REiUm9zSQMGZH4bfZi52VJgMqETCbPFlGRB1P8=" crossorigin="anonymous" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha256-ZvMf9li0M5GGriGUEKn1g6lLwnj5u+ENqCbLM5ItjQ0=" crossorigin="anonymous"></script>
</head>

<body style="background:#f5f5f5;">
        @include('sweet::alert')
    <div class="">

        <div class="header__top--show">
            <div>
                <img src="./assets/images/fixedhamburger.png" alt="button" class="header__column--toggler">
                <a href="{{url('/')}}">
                    <img src="../assets/images/missionlg.png" alt="" class="header__column--logo">
                </a>
                <a href="{{url('/')}}">
                    <img src="../assets/images/fixedimgtext.png" alt="" class="header__column--text fixed">
                </a>
            </div>
            <div class="header__top--fixed-right">
                <img src="assets/images/iatalogo.png" class="header__iata" alt="">
                <img src="assets/images/nanta.png" alt="" class="header__nanta">

            </div>

        </div>
        <div class="bg__inactive">
            <div class="header__menu header__menu--index">
                <!-- <img src="./assets/images/closeicon.svg" class="header__menu--close" style="transition: all 0.5s ease-in-out 0s;" alt=""> -->
                <div class="header__menu--close"></div>
                <div class="header__menu--wrapper">
                    <a href="{{url('/')}}" class="header__menu--container">
                        <img src="assets/images/homeicon.png" alt=""> <span class="header__menu--link" >
                            HOME</span>
                    </a>
                    <a href="{{url('/about-us/')}}" class="header__menu--container">
                        <img src="assets/images/abouticon.png" alt="">
                        <span  class="header__menu--link"> ABOUT
                    </span>
                    </a>
                    <a href="{{url('/deals/')}}" class="header__menu--container">
                        <img src="assets/images/dealsicon.png" alt=""><span 
                            class="header__menu--link"> DEALS
                            &amp; OFFERS</span>
                    </a>
                    <a href="{{url('/contact-us/')}}" class="header__menu--container active">
                        <img src="assets/images/phonebookicon.png" alt=""> 
                        <span class="header__menu--link">CONTACT </span>
                    </a>
                    <a href="{{url('/faq/')}}" class="header__menu--container">
                        <img src="assets/images/faqicon.png" alt=""><span class="header__menu--link">
                            FAQ'S</span>
                    </a>
                    <br>
                    <p class="green-text header__sub--text">09-6710003</p>
                    <p class="green-text header__sub--text">09-6720003</p>
                    <p class="green-text header__sub--text">fly@apriltravelsng.com</p>
                    <img src="./assets/images/descbg.png" alt="" class="header__menu--bg-bottom">

                </div>
            </div>
        </div>


    </div>
    <div>
        <div class="header__top--fixed">
            <div>
                <img src="./assets/images/fixedhamburger.png" alt="button" class="header__column--toggler">
                <img src="./assets/images/missionlg.png" alt="" class="header__column--logo">
                <img src="./assets/images/fixedimgtext.png" alt="" class="header__column--text">
            </div>
            <div class="header__top--flex-right">
                <img src="assets/images/iatalogo.png" class="header__iata" alt="">
                <button type="button" value="contact" class="header__fixed--button">CONTACT US</button>
            </div>

        </div>
     
        <header class="contact__bg">
            <div class="">
                <h1 class="contact__hero">Contact Us</h1>
                <p class="contact__desc">Got a question? We’d love to hear from you. Send us a message <br> and we’ll
                    respond as soon as possible</p>
            </div>
        </header>
    </div>
    <div class="contact__bg--2">
        <div class="contact ">
            <form action="{{url('/contact-april-travels/')}}"  method="POST" class="contact__form">
                @csrf
                <label for="name">Name: </label>
                <input type="text" name="name" id="name"><br>
                <label for="email">E-mail Address: </label>
                <input type="email"  name="email" id="email"><br>
                <label for="message">Message: </label>
                <textarea class="contact__box"  name="body" rows="6" column="10" id="message"></textarea><br>
                <button class="contact__btn orange-btn">SEND MESSAGE</button>
            </form>
            <div class="contact__info">
                <div class="contact__email">
                    <!-- <img src="assets/images/mailicon.png" alt=""> -->
                    <p> fly@apriltravelsng.com </p>
                </div>
                <div class="contact__phone">
                    <!-- <img src="assets/images/callicon.png" alt=""> -->
                    <p> 01-2714147-9 </p>
                </div>
                <div class="contact__location">
                    <!-- <img src="assets/images/geoicon.png" alt=""> -->
                    <p>Shoreline House, 46, Industrial Avenue, Ilupeju, Lagos.</p>
                </div>
                <p class="contact__sub--desc" >Follow us on our Social Media Pages </p>
                <div class="contact__medias" >
                    <img src="assets/images/facemini.png" alt="">
                    <img src="assets/images/igsmall.png" alt="">
                    <img src="assets/images/twitmini.png" alt="">
                </div>
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
                <a href="{{url('/')}}"><button class="footer__overlay--btn orange-btn">BOOK NOW</button></a>
            </div>
            <div class="footer__main">
                <div>
                    <a href="{{url('/')}}" class="footer__main--link">
                        HOME
                    </a>
                    <a href="{{url('/about-us/')}}" class="footer__main--link">
                        ABOUT APRIL TRAVELS
                    </a>
                    <!-- <a href="{{url('/faq/')}}" class="footer__main--link">
                        WHY 
                    </a> -->
                    
                </div>
                <a href="https://www.kjk.africa/">
                <div class="footer__main--right">
                    <h6>DEVELOPED BY</h6>    
                </div>
            </a>
            </div>
            <div>
                <div class="footer__copyright">
                    <h4 class="footer__copyright--text">All Rights Reserved to APRIL TRAVELS LTD. ©
                        <script type="text/javascript">document.write(new Date().getFullYear());</script>
                    </h4>
                </div>
            </div>
        </footer>
    <!-- build:js assets/scripts/App.js -->
    <script src="temp/scripts/App.js"></script>
    <script src="assets/scripts/header.js"></script>
    <!-- endbuild -->


</body>





</html>