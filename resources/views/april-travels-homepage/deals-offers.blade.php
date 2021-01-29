<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Deals Offers - April Travels Limited
    </title>
    <link rel="icon" href="assets/images/favlogo.png" type="image/x-icon">
    
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <!-- endbuild -->
    <!-- build:js assets/scripts/Vendor.js -->
    <script src="temp/scripts/Vendor.js"></script>
    <!-- endbuild -->
</head>

<body style="background:#f5f5f5;">
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
                    <a href="{{url('/deals/')}}" class="header__menu--container active">
                        <img src="assets/images/dealsicon.png" alt=""><span 
                            class="header__menu--link"> DEALS
                            &amp; OFFERS</span>
                    </a>
                    <a href="{{url('/contact-us/')}}" class="header__menu--container">
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
                    <p class="green-text header__sub--text">fly@apriltravels.com</p>
                    <img src="./assets/images/descbg.png" alt="" class="header__menu--bg-bottom">

                </div>
            </div>
        </div>


    </div>
    <div class="travel">
        <header class="travel__bg"></header>
    </div>
    <section class="location location__location">
        <div class="location__hero">
            <h1 class="location__hero--text green-text">Deals &amp; Offers</h1>
            <p class="location__sub--text">Check out our mouth watering offers, we offer the best deals on our travel
                packages </p>

        </div>
        <div class="location__wrapper location__loc--wrapper">
            @foreach($deals as $deal)
            <a href="location.html" class="location__wrapper--link location__wrapper--london">
                <div class="location__wrapper--link-top">
                    <div class="location__wrapper--link-top-container">
                        <span class="location__wrapper--link-top-container-text white-text">{{strtoupper($deal->location)}}</span>
                    </div>
                    <div class="location__wrapper--link-top-preview">
                        <span class="white-text">{{$deal->discount}}%</span>
                        <p class="white-text">for {{$deal->booking}} bookings</p>
                    </div>
                </div>
                <div class="location__wrapper--link-bottom">
                    <div class="location__wrapper--link-bottom-container">
                        <h5 class="location__wrapper--link-bottom-container-amount white-text">&#8358; {{number_format($deal->amount)}}</h5>
                        <h5 class="location__wrapper--link-bottom-container-desc color-text">Per person</h5>
                    </div>
                    <p class="location__wrapper--link-bottom-text white-text">Accomodation Inclusive</p>
                </div>
            </a>
            @endforeach
        </div>
        {{-- <div class="location__wrapper">
            <a href="location.html" class="location__wrapper--link location__wrapper--lagos">
                <!-- <div class="location__wrapper--link-overlay"></div> -->
                <div class="location__wrapper--link-top">
                    <div class="location__wrapper--link-top-container">
                        <span class="location__wrapper--link-top-container-text white-text">LAGOS</span>
                    </div>
                    <div class="location__wrapper--link-top-preview">
                        <span class="white-text">30%</span>
                        <p class="white-text">for 2 bookings</p>
                    </div>
                </div>
                <div class="location__wrapper--link-bottom">
                    <div class="location__wrapper--link-bottom-container">
                        <h5 class="location__wrapper--link-bottom-container-amount white-text">N 100,000</h5>
                        <h5 class="location__wrapper--link-bottom-container-desc color-text">Per person</h5>
                    </div>
                    <p class="location__wrapper--link-bottom-text white-text">Accomodation Inclusive</p>
                </div>
            </a>
            <a href="location.html" class="location__wrapper--link location__wrapper--paris">
                <!-- <div class="location__wrapper--link-overlay"></div> -->
                <div class="location__wrapper--link-top">
                    <div class="location__wrapper--link-top-container">
                        <span class="location__wrapper--link-top-container-text white-text">PARIS</span>
                    </div>
                    <div class="location__wrapper--link-top-preview">
                        <span class="white-text">5%</span>
                        <p class="white-text">for 2 bookings</p>
                    </div>
                </div>
                <div class="location__wrapper--link-bottom">
                    <div class="location__wrapper--link-bottom-container">
                        <h5 class="location__wrapper--link-bottom-container-amount white-text">N 800,000</h5>
                        <h5 class="location__wrapper--link-bottom-container-desc color-text">Per person</h5>
                    </div>
                    <p class="location__wrapper--link-bottom-text white-text">Accomodation Inclusive</p>
                </div>
            </a>
        </div>
        <div class="location__wrapper">
            <a href="location.html" class="location__wrapper--link location__wrapper--london">
                <!-- <div class="location__wrapper--link-overlay"></div> -->
                <div class="location__wrapper--link-top">
                    <div class="location__wrapper--link-top-container">
                        <span class="location__wrapper--link-top-container-text white-text">LONDON</span>
                    </div>
                    <div class="location__wrapper--link-top-preview">
                        <span class="white-text">10%</span>
                        <p class="white-text">for 2 bookings</p>
                    </div>
                </div>
                <div class="location__wrapper--link-bottom">
                    <div class="location__wrapper--link-bottom-container">
                        <h5 class="location__wrapper--link-bottom-container-amount white-text">N 500,000</h5>
                        <h5 class="location__wrapper--link-bottom-container-desc color-text">Per person</h5>
                    </div>
                    <p class="location__wrapper--link-bottom-text white-text">Accomodation Inclusive</p>
                </div>
            </a>
            <a href="location.html" class="location__wrapper--link location__wrapper--santorini">
                <!-- <div class="location__wrapper--link-overlay"></div> -->
                <div class="location__wrapper--link-top">
                    <div class="location__wrapper--link-top-container">
                        <span class="location__wrapper--link-top-container-text white-text">SANTORINI</span>
                    </div>
                    <div class="location__wrapper--link-top-preview">
                        <span class="white-text">12%</span>
                        <p class="white-text">for 2 bookings</p>
                    </div>
                </div>
                <div class="location__wrapper--link-bottom">
                    <div class="location__wrapper--link-bottom-container">
                        <h5 class="location__wrapper--link-bottom-container-amount white-text">N 400,000</h5>
                        <h5 class="location__wrapper--link-bottom-container-desc color-text">Per person</h5>
                    </div>
                    <p class="location__wrapper--link-bottom-text white-text">Accomodation Inclusive</p>
                </div>

            </a>
        </div>
        <div class="location__wrapper">
            <a href="location.html" class="location__wrapper--link location__wrapper--lagos">
                <!-- <div class="location__wrapper--link-overlay"></div> -->
                <div class="location__wrapper--link-top">
                    <div class="location__wrapper--link-top-container">
                        <span class="location__wrapper--link-top-container-text white-text">LAGOS</span>
                    </div>
                    <div class="location__wrapper--link-top-preview">
                        <span class="white-text">30%</span>
                        <p class="white-text">for 2 bookings</p>
                    </div>
                </div>
                <div class="location__wrapper--link-bottom">
                    <div class="location__wrapper--link-bottom-container">
                        <h5 class="location__wrapper--link-bottom-container-amount white-text">N 100,000</h5>
                        <h5 class="location__wrapper--link-bottom-container-desc color-text">Per person</h5>
                    </div>
                    <p class="location__wrapper--link-bottom-text white-text">Accomodation Inclusive</p>
                </div>
            </a>
            <a href="location.html" class="location__wrapper--link location__wrapper--paris">
                <!-- <div class="location__wrapper--link-overlay"></div> -->
                <div class="location__wrapper--link-top">
                    <div class="location__wrapper--link-top-container">
                        <span class="location__wrapper--link-top-container-text white-text">PARIS</span>
                    </div>
                    <div class="location__wrapper--link-top-preview">
                        <span class="white-text">5%</span>
                        <p class="white-text">for 2 bookings</p>
                    </div>
                </div>
                <div class="location__wrapper--link-bottom">
                    <div class="location__wrapper--link-bottom-container">
                        <h5 class="location__wrapper--link-bottom-container-amount white-text">N 800,000</h5>
                        <h5 class="location__wrapper--link-bottom-container-desc color-text">Per person</h5>
                    </div>
                    <p class="location__wrapper--link-bottom-text white-text">Accomodation Inclusive</p>
                </div>
            </a>
        </div> --}}
        <!-- <button value="submit" class="location__view--btn orange-btn">VIEW ALL</button> -->
        <!-- <a href="/investments" class="button lemon-green top-padding w-button">View all</a> -->
    </section>


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
               <!--  <a href="{{url('/faq/')}}" class="footer__main--link">
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
    <!-- build:js assets/scripts/App.js -->
    <script src="temp/scripts/App.js"></script>
    <script src="assets/scripts/header.js"></script>
    <!-- endbuild -->


</body>





</html>