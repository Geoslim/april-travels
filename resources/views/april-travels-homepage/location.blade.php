<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels Limited
    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <!-- endbuild -->
    <!-- build:js assets/scripts/Vendor.js -->
    <script src="temp/scripts/Vendor.js"></script>
    <!-- endbuild -->
</head>

<body >
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
                <img src="assets/images/iatalogo.png" class="header__iata" alt="">
                <img src="../assets/images/nanta.png" alt="" class="header__nanta">

            </div>

        </div>
        <div class="bg__inactive">
            <div class="header__menu header__menu--index">
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
                    <a href="{{url('/deals/')}}" class="header__menu--container active">
                        <img src="../assets/images/dealsicon.png" alt=""><span 
                            class="header__menu--link"> DEALS
                            &amp; OFFERS</span>
                    </a>
                    <a href="{{url('/contact-us/')}}" class="header__menu--container">
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
        <header class="loc__bg"></header>
    </div>
    <div class="loc">
        <div class="loc__left">
            <div class="loc__left--top">
                <h5 class="colored-text">{{strtoupper($findDeal->location)}}</h5>
                <div class="loc__left--inner">
                    <div>
                        <h2 class="">&#8358; {{number_format($findDeal->amount)}} <span class="loc__green">PER PERSON</span></h2>
                        <span class="loc__green">DURATION</span>
                        <h2 class="">7days</h2>
                    </div>

                    <div>
                        <hr>
                        <p class="">DISCOUNT</p>
                        <h2>{{$findDeal->discount}}%</h2>
                    </div>

                </div>
            </div>
            <div class="loc__left--bottom">
                <h6>Share with Friends</h6>
                    <div class="loc__left--bottom-socials">
                        <img src="../assets/images/facebooklg.png" alt="">
                        <img src="../assets/images/instagramlg.png" alt="">
                        <img src="../assets/images/twitterlg.png" alt="">
                    </div>              
            </div>
        </div>
        <div class="loc__right">
            <h4>Description</h4>
            <br class="">
            <br class="nobreak">
            <p>
                {{Ucfirst($findDeal->description)}}
          
            </p>
        
        </div>
    </div>

    <section class="location location__location xpad">
        
            <div class="location__wrapper location__loc--wrapper">
          @foreach($deals as $deal)
                <div>
                    <a href="{{url('/location/'.$deal->id)}}" class="location__wrapper--link">
                        <div class="location__wrapper--link-top">
                            <div class="location__wrapper--link-top-container">
                                <span class="location__wrapper--link-top-container-text white-text">{{strtoupper($deal->location)}}</span>
                            </div>
                            <div class="location__wrapper--link-top-preview">
                                <span class="white-text">{{$deal->discount}}%</span>
                                <p class="white-text">for {{$deal->booking}}  bookings</p>
                            </div>
                        </div>
                        <div class="location__wrapper--link-bottom" style="z-index: 100;">
                            <div class="location__wrapper--link-bottom-container">
                                <h5 class="location__wrapper--link-bottom-container-amount white-text">&#8358; {{number_format($deal->amount)}}</h5>
                                <h5 class="location__wrapper--link-bottom-container-desc color-text">Per person</h5>
                            </div>
                            <p class="location__wrapper--link-bottom-text white-text">Accomodation Inclusive</p>
                        </div>
                    </a>
                    <img src="{{url('storage/'. $deal->deals_image)}}" alt="">
                </div>
             @endforeach
              
            <a href="{{url('/deals/')}}" ><button value="submit" class="location__view--btn orange-btn">VIEW ALL</button></a>
            </div>
            
     
        </section>
    <footer class="footer footer__location">
        <div class="footer__overlay">
            
            <img src="assets/images/footerlg.png" alt="" class="footer__overlay--logo">
            
            <div class="footer__overlay--text">
                <h4>
                    <span style="transform: translateY(-20px);">
                        APRIL TRAVELS LTD.
                    </span>
                </h4>
            </div>
            <h3 class="footer__overlay--hero">No better time
                <br>to start travelling <br> but now</h3>
            <a href="{{url('/')}}"><button class="footer__overlay--btn orange-btn">BOOK NOW</button></a>
        </div>
        <div class="footer__main">
            <div class="footer__main--container responsive">
                <a href="i{{url('/')}}" class="footer__main--link">
                    HOME
                </a>
                <a href="{{url('/about-us/')}}" class="footer__main--link">
                    ABOUT APRIL TRAVELS
                </a>
                <!-- <a href="{{url('/faq/')}}" class="footer__main--link">
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
    <script src="../temp/scripts/App.js"></script>
    <script src="../assets/scripts/header.js"></script>
    <!-- endbuild -->


</body>





</html>