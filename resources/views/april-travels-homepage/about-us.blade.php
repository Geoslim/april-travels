<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
       About Us - April Travels Limited
    </title>
   <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sansita&display=swap" rel="stylesheet">
    <!-- endbuild -->
    <!-- build:js assets/scripts/Vendor.js -->
    <script src="temp/scripts/Vendor.js"></script>
    <style type="text/css">
    #logo{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: fill .5s ease forwards 2s;
    /* animation: moveleft .5s ease forwards 4s; */
}

#logo path:nth-child(1){
stroke-dasharray: 254px;
stroke-dashoffset: 254px;
animation: line-anim 5s ease forwards;

}
#logo path:nth-child(2){
stroke-dasharray: 206px;
stroke-dashoffset: 206px;
animation: line-anim 2s ease forwards 0.3s;
}

#logo path:nth-child(3){
stroke-dasharray: 219px;
stroke-dashoffset: 219px;
animation: line-anim 2s ease forwards 0.6s;

}
#logo path:nth-child(4){
stroke-dasharray: 100px;
stroke-dashoffset: 100px;
animation: line-anim 2s ease forwards 0.9s;
    
}
#logo path:nth-child(5){
stroke-dasharray: 282px;
stroke-dashoffset:282px;
animation: line-anim 2s ease forwards 1.2s;
    
}
#logo path:nth-child(6){
stroke-dasharray: 268px;
stroke-dashoffset: 268px;
animation: line-anim 2s ease forwards 1.5s;
}

@keyframes line-anim{
    to{
        stroke-dashoffset: 0;
    }
}

@keyframes fill{
    from{
        fill: transparent;
    }
    to{
     fill: white;
    }
}


</style>
    
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
                    <a href="{{url('/about-us/')}}" class="header__menu--container active">
                        <img src="assets/images/abouticon.png" alt="">
                        <span  class="header__menu--link"> ABOUT
                    </span>
                    </a>
                    <a href="{{url('/deals/')}}" class="header__menu--container">
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
                    <p class="green-text header__sub--text">fly@apriltravelsng.com</p>
                    <img src="./assets/images/descbg.png" alt="" class="header__menu--bg-bottom">

                </div>
            </div>
        </div>

    </div>
    <div style="background: white">
        <header class="model__bg">
            <h2 class="faq__green--text faq__hero" style="font-family: Sansita;font-style: normal;font-weight: 900;font-size: 57px;color: #FFFFFF;letter-spacing: 3px; position: absolute; top: 30%; left: 50%">
                
<svg id="logo" width="300" height="150" viewBox="0 0 144 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M17.6082 20.1984L17.7385 20.5H18.0671H21.6031H22.3774L22.0589 19.7943L13.8429 1.59432L13.71 1.30004H13.3871H10.0591H9.73585L9.60318 1.59486L1.41318 19.7949L1.09585 20.5H1.86914H5.35314H5.68364L5.81315 20.196L7.47764 16.288H15.9185L17.6082 20.1984ZM37.871 10.4311C38.9658 9.54037 39.6538 8.20712 39.6538 6.53204C39.6538 4.93657 38.9982 3.60005 37.7318 2.67937C36.4852 1.77312 34.6908 1.30004 32.4457 1.30004H23.9177H23.4177V1.80004V20V20.5H23.9177H32.9657C35.3589 20.5 37.2575 20.0366 38.5713 19.1084C39.9104 18.1623 40.5898 16.7691 40.5898 15.06C40.5898 13.7798 40.2294 12.6957 39.5812 11.8423C39.1277 11.2454 38.544 10.7753 37.871 10.4311ZM81.8658 1.80004V1.30004H81.3658H78.0378H77.5378V1.80004V11.94C77.5378 13.7487 77.1345 14.9451 76.4667 15.6877C75.8082 16.42 74.8149 16.796 73.4358 16.796C72.0565 16.796 71.0556 16.4199 70.3904 15.6862C69.7167 14.9431 69.3078 13.7469 69.3078 11.94V1.80004V1.30004H68.8078H65.4278H64.9278V1.80004V12.07C64.9278 14.8145 65.7029 17.0031 67.1915 18.5059C68.6807 20.0092 70.8183 20.76 73.4098 20.76C75.9889 20.76 78.12 20.0088 79.6056 18.5055C81.0907 17.0028 81.8658 14.8145 81.8658 12.07V1.80004ZM88.9613 20V20.5H89.4613H92.8413H93.3413V20V5.16004H98.8733H99.3733V4.66004V1.80004V1.30004H98.8733H83.4293H82.9293V1.80004V4.66004V5.16004H83.4293H88.9613V20ZM124.877 1.80004V1.30004H124.377H121.049H120.549V1.80004V11.94C120.549 13.7487 120.146 14.9451 119.478 15.6877C118.82 16.42 117.827 16.796 116.447 16.796C115.068 16.796 114.067 16.4199 113.402 15.6862C112.728 14.9431 112.319 13.7469 112.319 11.94V1.80004V1.30004H111.819H108.439H107.939V1.80004V12.07C107.939 14.8145 108.715 17.0031 110.203 18.5059C111.692 20.0092 113.83 20.76 116.421 20.76C119.001 20.76 121.132 20.0088 122.617 18.5055C124.102 17.0028 124.877 14.8145 124.877 12.07V1.80004ZM140.038 6.20918L140.537 6.50218L140.754 5.9661L141.82 3.34011L141.975 2.95929L141.631 2.73392C139.945 1.62818 137.555 1.04004 135.299 1.04004C132.724 1.04004 130.767 1.68383 129.444 2.76863C128.113 3.86007 127.467 5.36368 127.467 6.97404C127.467 8.82631 128.221 10.0779 129.355 10.9394C130.455 11.7761 131.895 12.2299 133.251 12.5772C133.64 12.6768 134.02 12.7674 134.387 12.8547C135.34 13.0819 136.202 13.2874 136.903 13.5754C137.379 13.7707 137.726 13.9847 137.952 14.2277C138.165 14.4568 138.283 14.7255 138.283 15.086C138.283 15.5899 138.072 16.0245 137.559 16.3562C137.02 16.705 136.122 16.952 134.753 16.952C132.624 16.952 130.422 16.1545 129.06 15.0603L128.554 14.6538L128.29 15.2466L127.12 17.8726L126.969 18.2121L127.251 18.4547C128.878 19.8579 131.844 20.76 134.753 20.76C137.328 20.76 139.291 20.1162 140.619 19.036C141.956 17.9493 142.611 16.4525 142.611 14.852C142.611 13.0175 141.857 11.7773 140.726 10.9235C139.628 10.0944 138.193 9.6432 136.84 9.29759C136.45 9.1981 136.07 9.10771 135.704 9.02052C134.754 8.79471 133.895 8.59039 133.196 8.30509C132.721 8.11131 132.374 7.8995 132.15 7.65955C131.938 7.43375 131.821 7.17042 131.821 6.81804C131.821 6.28585 132.033 5.82416 132.531 5.4761C133.051 5.11227 133.923 4.84804 135.273 4.84804C136.766 4.84804 138.473 5.29007 140.038 6.20918ZM14.3689 12.636H9.04909L11.6989 6.44642L14.3689 12.636ZM32.0817 4.95204C33.2063 4.95204 34.0074 5.15436 34.5134 5.49431C34.9879 5.81313 35.2478 6.28155 35.2478 6.97404C35.2478 7.65062 34.9903 8.11308 34.5149 8.43001C34.0082 8.7678 33.2061 8.97004 32.0817 8.97004H27.7977V4.95204H32.0817ZM32.7577 16.848H27.7977V12.596H32.7577C33.9958 12.596 34.8616 12.7949 35.4046 13.1463C35.9086 13.4724 36.1838 13.9608 36.1838 14.722C36.1838 15.4833 35.9086 15.9717 35.4046 16.2978C34.8616 16.6491 33.9958 16.848 32.7577 16.848ZM52.199 20.76C58.0945 20.76 62.501 16.6064 62.501 10.9C62.501 5.1937 58.0945 1.04004 52.199 1.04004C46.3027 1.04004 41.897 5.2206 41.897 10.9C41.897 16.5795 46.3027 20.76 52.199 20.76ZM52.199 16.796C48.8065 16.796 46.303 14.3392 46.303 10.9C46.303 7.46087 48.8065 5.00404 52.199 5.00404C55.5916 5.00404 58.0951 7.46087 58.0951 10.9C58.0951 14.3392 55.5916 16.796 52.199 16.796Z" stroke="white"/>
        </svg>


            </h2>
            <div class="">
                
            </div>
        </header>
    </div>
    <div class="model">
        <!-- <h2 class="model__hero green-text"><span class="orange-text" style="color: #FF5E16;">ABOUT US</span></h2> -->
        <br>
        <p class="model__text">
                April Travels Limited is an indigenous travel management company established by Bunmi Tejuosho in April 1999. Powered by highly effective individuals with vast experience in Travel management with a passion for excellence in service delivery. Our core strength is a great team of individuals who will ensure that all your travel needs are met to your utmost satisfaction.
        </p>
        <br>
        <p class="model__text">
                April Travels is one of the most successful and foremost travel Management Company in Nigeria. We offer travel services such as Ticketing and Reservation, Corporate Travel Management, Packaged Tours and Ground Travel Logistics.
        </p>
        <div class="model__block">
            <div class="model__block--top">
                <div class="model__block--top-container model__block--dark ">                    
                    <div class="model__block--icon relax"></div>
                    <div>
                        <h5 class="colored-text ">Comfort</h5>
                        <p class="white-text top-padding noshow">taque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis <br></p>
                    </div>
                    <div class="value-chain-arrow"></div>
                </div>
                <div class="model__block--top-container model__block--cyan">
                    <div class="model__block--icon customer"></div>
                    <div>
                        <h5 class="green-text">Customer Service</h5>
                    </div>
                    <div class="value-chain-arrow "></div>
                </div>
                <div class="model__block--top-container model__block--green">
                    <div class="model__block--icon value"></div>
                    <div>
                        <h5 class="green-text">Value for Money</h5>
                    </div>
                    <div class="value-chain-arrow "></div>
                </div>
                <div class="model__block--top-container model__block--blue">
                    <div class="model__block--icon money"></div>
                    <div>
                        <h5 class="colored-text">Customer Satisfaction</h5>
                </div>
                </div>
            </div>
            <div class="model__block--bottom">
                <h5 class="green-text ">
                    Our core strength is a great team of individuals who will ensure that all your travel needs are met to your utmost satisfaction.
                </h5>
            </div>
        
        </div>
    </div>
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
                <a href="{{url('/')}}" class="footer__main--link">
                    HOME
                </a>
                <a href="{{url('/about-us/')}}" class="footer__main--link active">
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