<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels Limited
    </title>
    <link rel="icon" href="assets/images/favlogo.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/styles/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/styles/styles.css">

    <!-- <link href="https://fonts.googleapis.com/css?family=Catamaran&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> -->
    <!-- endbuild -->
    <!-- build:js assets/scripts/Vendor.js -->
    <script src="temp/scripts/Vendor.js"></script>

    <!-- endbuild -->

    <!-- typeahead js-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
    <!-- end of typeahead js-->
 
    <style>
    .typeahead .dropdown-item{
    width:300px;
 
    }

    </style>
</head>

<body>

    <div class="mainContainer">
        
        <div class="header__top--fixed">
            <div>
                <img src="./assets/images/fixedhamburger.png" alt="button" class="header__column--toggler">
                <img src="./assets/images/missionlg.png" alt="" class="header__column--logo">
                <img src="./assets/images/fixedimgtext.png" alt="" class="header__column--text fixed">
            </div>
            <div class="header__top--fixed-right">
                <!-- <button type="button" value="contact" class="header__fixed--button">CONTACT US</button> -->
                <img src="assets/images/nanta.png" alt="" class="header__nanta">

            </div>

        </div>
        <header class="header">
            <div class="header__top--flex-right">
                <img src="assets/images/iatalogo.png" class="header__iata" alt="">
                <img src="assets/images/nanta.png" alt="" class="header__nanta">
            </div>
            <div class="header__column">
                <div class="header__column--description">
                    <img src="./assets/images/button.png" alt="button" class="header__column--toggler">
                    <img src="./assets/images/logo.png" alt="" class="header__column--logo">
                    <img src="./assets/images/WHITE.png" alt="" class="header__column--text">
                </div>

                <div class="header__body">
                    <h1 class="header__body--hero">Explore the World<br> With us</h1>
                    <div class="header_body--description">
                        <p class="header__body--description">Travel to your Fantasy Land in comfort</p>
                    </div>
                    <form class="header__form">
                        <div class="header__form--container">
                            <p class="header__form--container-description">From</p>
                            <div class="header__form--container-body">
                                <input type="text" id="airport_name" name="airport_one" class="header__form--container-body-text typeahead" placeholder="Kano International Airport">
                                <div>
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;&nbsp;
                                    <img src="./assets/images/gps.png" alt="" class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header__form--container">
                            <p class="header__form--container-description">To</p>
                            <div class="header__form--container-body">
                                <input name="airport_to" class="header__form--container-body-text typeahead" placeholder="Heathrow International Airport">
                            </div>
                        </div>
                        <div class="header__form--container header__form--container-screens">
                            <p class="header__form--container-description">Departure</p>
                            <div class="header__form--container-body">
                                <input type="date" class="header__form--container-body-text"
                                    data-date-format="DD MMMM YYYY" value="2019-10-09">
                                <div>
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;&nbsp;
                                    <img src="./assets/images/calendar.png" alt=""
                                        class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header__form--container header__form--container-screens">
                            <p class="header__form--container-description">Return date</p>
                            <div class="header__form--container-body">
                                <input type="date" class="header__form--container-body-text"
                                    data-date-format="DD MMMM YYYY" value="2019-10-09">
                                
                                <div>
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;&nbsp;
                                    <img src="./assets/images/calendar.png" alt=""
                                        class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header__form--container header__form--container-screens">
                            <div class="header__form--container-description">Passenger <span class="white__dot"></span>
                                Class
                            </div>
                            <div class="header__form--container-body extra__5kpad">
                                <div>
                                    <span class="header__form--container-body-text no__wrap">1 Adult
                                         &nbsp;<span class="brown__dot"></span>
                                        Business </span>
                                    <img src="./assets/images/select.png" alt="" class="header__form--container-select">
                                </div>

                                <div>
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;
                                    <img src="./assets/images/person.png" alt=""
                                        class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header__form--container header__form--container-screens">
                            <p class="header__form--container-description">Ticket Class</p>
                            <div class="header__form--container-body extra__5kpad">
                                <div>
                                    <span class="header__form--container-body-text no__wrap">
                                        Business Class
                                    </span>
                                    <img src="./assets/images/select.png" alt="" class="header__form--container-select">
                                </div>
                                <div>
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;
                                    <img src="./assets/images/card.png" alt=""
                                        class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header__form--radio">
                            <p>
                                <input type="radio" id="oneway" name="radio-group" checked>
                                <label for="oneway">ONE WAY</label>
                            </p>
                            <p class="extra__padding">
                                <input type="radio" id="roundtrip" name="radio-group">
                                <label for="roundtrip">ROUND TRIP</label>
                            </p>
                            <p>
                                <input type="radio" id="destination" name="radio-group">
                                <label for="destination">MULTIPLE DESTINATION</label>
                            </p>
                        </div>
                        <button value="submit" class="header__form--submit orange-btn">BOOK NOW</button>
                    </form>

                </div>
                <div class="bg__inactive">
                    <div class="header__menu">
                        
                        <div class="header__menu--close"></div>
                        <div class="header__menu--wrapper">
                            <a href="{{url('/')}}" class="header__menu--container active">
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
        </header>
    
        <div class="header_slides owl-carousel owlslides owl-theme">
            <div class="slide1"></div>
            <div class="slide2"></div>
            <div class="slide3"></div>
        </div>

    </div> 
    <section class="description js__description">
        <div class="description__mission">
            <div class="description__mission--container">
                <img src="./assets/images/missionlg.png" alt=""
                    class="description__mission--container-logo">&nbsp;
                <p class="description__mission--container-text">
                    <span class="description__mission--container-text-red">At April travels,</span><br> Our mission is
                    to provide comfort and splendor for our customers while traveling
                </p>
            </div>
        </div>
        <div class="description__menu">
            <div class="description__menu--container">
                <div class="description__menu--container-inner">
                    <div class="description__menu--container-inner-home">
                        <div class="description__menu--container-inner-home-tab">
                            <a href="" data="overview"
                                class="description__menu--container-inner-home-tab-link description__menu--container-inner-home-tab-link-current">OVERVIEW</a>
                            <a href="" data="about" class="description__menu--container-inner-home-tab-link">PROFILE</a>
                           
                        </div>
                        <div class="description__menu--container-inner-home-content">
                            <div data="overview"
                                class="description__menu--container-inner-home-content-text description__menu--container-inner-home-content-text-active">
                                <p>
                                    April Travels Limited is one of the foremost travel management companies in Nigeria.
                                    <br><br>
                                    We offer travel services such as Ticketing and Reservation, Corporate Travel
                                    Management, Packaged Tours and Ground Travel Logistics.
                                </p>
                            </div>
                            <div data="about" class="description__menu--container-inner-home-content-text">
                                <p>
                                    April Travels Limited is an Indigenous travel management company <br><br>
                                    <span> Established by Bunmi Tejuoso</span> <br>
                                    <span> Incorporated in 1991 </span><br>
                                    <span> IATALicensed </span><br>
                                    <span>  Member of NANTA </span><br><br>
                                    Receipt of several awards by International Airlines operating in Nigeria
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="description__menu--bg"></div>
        </div>
    </section>
    <div class="onboard">
        <div class="onboard__hero">
            <h1 class="onboard__hero--text white-text">Our Services Include</h1>
        </div>
        <div class="onboard__tab">
            <div class="onboard__tab--menu">
                <a data-tab="step 1" class="onboard__tab--menu-link onboard__tab--menu-current">
                    <div class="onboard__tab--indicator">
                        <div class="">Ticketing and Reservations</div>
                    </div>
                </a>
                <a data-tab="Step 2" class="onboard__tab--menu-link">
                    <div class="onboard__tab--indicator">
                        <div>Emergency Booking</div>
                    </div>
                </a>
                <a data-tab="Step 3" class="onboard__tab--menu-link">
                    <div class="onboard__tab--indicator">
                        <div>Hospitality</div>
                    </div>
                </a>
                <a data-tab="Step 4" class="onboard__tab--menu-link">
                    <div class="onboard__tab--indicator">
                        <div>Packaged Service</div>
                    </div>
                </a>
            </div>
            <div class="onboard__tab--content">
                <div data-tab="Step 1" class="onboard__tab--content-pane onboard__tab--content-active">
                    <div class="onboard__tab--content-pane-wrapper">
                        <div class="onboard__tab--content-pane-wrapper-left">
                            <h2 class="onboard__card--wrapper-hero green-text onboard__card--icon">Ticketing <br>
                                and Reservation
                            </h2>
                            <button href="/sign-up"
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn">CONTACT US</button>
                        </div>
                        <div class="onboard__card--top">
                            <div class="ticketing">
                                <h2 style="line-height:44px;">Ticketing and <br> Reservation</h2>
                            </div>
                            <p style="text-align: justify;">April Travels Limited offers first-class ticketing services
                                on both
                                local and
                                international flights.</p>
                            <br>
                            <p class="onboard__card--text media__font">We
                                are responsible for:</p>
                            <div class="onboard__card--list">
                                <p class="onboard__card--list-text">Online Booking (AMADEUS)</p>
                                <p class="onboard__card--list-text">Seat reservation</p>
                                <p class="onboard__card--list-text">Free confirmation of travel tickets</p>
                                <p class="onboard__card--list-text">Provision of in-house reservation & ticketing desk
                                </p>
                                <p class="onboard__card--list-text">Executive mileage updates</p>
                                <p class="onboard__card--list-text">Ticket rules started clearly in the reservation.</p>

                            </div>

                        </div>
                        <button href="/sign-up"
                            class="onboard__tab--content-pane-wrapper-left-btn lemon-btn responsive">
                            CONTACT US
                        </button>


                    </div>
                </div>
                <div data-tab="Step 2" class="onboard__tab--content-pane">
                    <div class="onboard__tab--content-pane-wrapper">
                        <div class="onboard__tab--content-pane-wrapper-left">
                            <h2 class="onboard__card--wrapper-hero green-text onboard__card--icon emergency">Emergency
                                <br>Booking</h2>
                            <button href="/sign-up"
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn">CONTACT US</button>
                        </div>

                        <div class="onboard__card--top">
                            <div class="emergency">
                                <h2 style="line-height: 44px;">Emergency <br> Booking</h2>
                            </div>
                            <p style="text-align: justify;">
                                We are a one-stop destination for all your travel needs. 
                                understand that at times you are forced to look for last
                                minute flight tickets due to emergency at home or
                                some official meet up.

                            </p>
                            <br>
                            <p class="onboard__card--text media__font" style="columns: #5c5c5c;">We offer:</p>
                            <div class="onboard__card--list">
                                <p class="onboard__card--list-text">Urgent flight bookings</p>
                                <p class="onboard__card--list-text">Re-routing</p>
                                <p class="onboard__card--list-text">24/7 in- house services</p>

                            </div>

                        </div>
                        <button href="/sign-up"
                            class="onboard__tab--content-pane-wrapper-left-btn lemon-btn responsive">
                            CONTACT US
                        </button>
                    </div>
                </div>
                <div data-tab="Step 3" class="onboard__tab--content-pane">
                    <div class="onboard__tab--content-pane-wrapper">
                        <div class="onboard__tab--content-pane-wrapper-left">
                            <h2 class="onboard__card--wrapper-hero green-text onboard__card--icon package">Hospitality
                                <br> Service </h2>
                            <button href="/sign-up"
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn">CONTACT US</button>
                        </div>

                        <div class="onboard__card--top">
                            <div class="package">
                                <h2 style="line-height: 44px;">Hospitality <br> Service</h2>
                            </div>
                            <p style="text-align: justify;">
                                April Travels Limited has been welcoming groups of every size. 
                                We organise the perfect tours for meetings, incentive programs, 
                                executive retreats, family reunions and destination weddings. 
                                We ensure you enjoy impressive services you find at a
                                five –star luxury resorts.

                            </p>
                            <br>
                            <p class="onboard__card--text media__font" style="color: black;">Our company is
                                responsible for:</p>
                            <div class="onboard__card--list">
                                <p class="onboard__card--list-text">Protocol Services</p>
                                <p class="onboard__card--list-text">Hotel Reservations</p>
                                <p class="onboard__card--list-text"> Transportation Logistics</p>

                            </div>

                        </div>
                        <button href="/sign-up"
                            class="onboard__tab--content-pane-wrapper-left-btn lemon-btn responsive">
                            CONTACT US
                        </button>
                    </div>
                </div>
                <div data-tab="Step 4" class="onboard__tab--content-pane">
                    <div class="onboard__tab--content-pane-wrapper minor">
                        <div class="onboard__tab--content-pane-wrapper-left">
                            <h2 class="onboard__card--wrapper-hero green-text onboard__card--icon package">Packaged
                                <br>Service</h2><button href="/sign-up"
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn">CONTACT US</button>
                        </div>

                        <div class="onboard__card--top">
                            <div class="package">
                                <h2 style="line-height: 44px;">Packaged <br> Service</h2>
                            </div>
                            <p style="text-align: justify;">
                                April Travels Limited is the most preferred company when it 
                                comes to events for branded and exclusive packaging.In the 
                                world of packaging, we look for that idea, contact or concept 
                                that gives you an unforgettable moment.

                            </p>
                            <br>
                            <p class="onboard__card--text media__font" style="color: black;">We offer:</p>
                            <div class="onboard__card--list">
                                <p class="onboard__card--list-text">Executive Card Programme</p>
                                <p class="onboard__card--list-text">Process miles redemption and free tickets on request
                                </p>
                                <p class="onboard__card--list-text">Priority on seat confirmation on fully booked
                                    flights. </p>

                            </div>

                        </div>
                        <button href="/sign-up"
                            class="onboard__tab--content-pane-wrapper-left-btn lemon-btn responsive">
                            CONTACT US
                        </button>
                    </div>
                </div>
            </div>

        </div> 
       
        <div class="onboard__why">
            <h2 class="onboard__why--hero white-text">Why<br><span class="green-text">April Travel?</span> </h2>
        </div>
        <div class="onboard__card">
            <div class="onboard__card--wrapper">
                <div class="onboard__card--wrapper-long">
                    <div>
                        <div class="onboard__card--wrapper-icon">
                            <img class="onboard__max--img" src="./assets/images/cardplane.png" alt="">
                        </div>
                        <div class="transtext">
                            <h4 class="onboard__card--wrapper-hero green-text">Easy Booking <br class="nobreak"> Process</h4>
                            <p class="onboard__card--wrapper-text">The process of booking is very stressfree and easy. We
                                send your confirmation immediately</p>
                        </div>                        
                    </div><br>
                    <div class="onboard__card--wrapper-long-bg"></div>
                    <button class="onboard__card--wrapper-long-btn orange-btn">LEARN MORE</button>
                </div>
                <div>
                    <div class="onboard__card--wrapper-flex">
                        <div class="onboard__card--wrapper-flex block">
                            <div class="onboard__card--wrapper-icon">
                                <img src="./assets/images/customericon2.png" alt="">
                            </div>
                            
                            <h4 class="onboard__card--wrapper-hero green-text">Customer Satisfaction</h4>
                            <p class="onboard__card--wrapper-text">We have a proven track record that shows that we can
                                deliver on the promises above and we will deploy our full strength as an organization to
                                ensure
                                that you are thoroughly satisfied with the services we would provide.</p>
                        </div>
                        <div class="onboard__card--wrapper-flex block">
                            <div class="onboard__card--wrapper-icon">
                                <img src="./assets/images/teamicon.png" alt="">
                            </div>
                            
                            <h4 class="onboard__card--wrapper-hero green-text">
                                Amazing Team
                            </h4>
                            <p class="onboard__card--wrapper-text">
                                At April Travels, our core strength is our highly experienced personnel who will ensure
                                that all your travel needs are met to your utmost satisfaction.
                                We will ensure that you always receive quality service
                            </p>
                        </div>
                    </div>
                    <div class="onboard__card--wrapper-flex">
                        <div class="onboard__card--wrapper-flex block">
                            <div class="onboard__card--wrapper-icon">
                                <img src="./assets/images/timeicon.png" alt="">
                            </div>
                            <div class="ownblock">
                                <h4 class="onboard__card--wrapper-hero green-text">
                                    Unbeatable Response Time
                                </h4>
                                <p class="onboard__card--wrapper-text">At vero eos et accusamus et iusto odio dignissimos
                                    ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et
                                    agibfoghil
                                </p>
                            </div>                            
                        </div>
                        <div class="onboard__card--wrapper-flex block">
                            <div class="onboard__card--wrapper-icon">
                                <img src="./assets/images/securityicon.png" alt="">
                            </div>
                            <h4 class="onboard__card--wrapper-hero green-text">
                                Financial Security
                            </h4>
                            <p class="onboard__card--wrapper-text">
                                We have a NGN130 million bid bond from Zenith/Leadway insurance to run a sustainable
                                business throughout the course of our relationship.
                                The company have a proven track record that shows that we can deliver on the promises
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="location">
        <div class="location__hero">
            <h1 class="location__hero--text green-text">Deals &amp; Offers</h1>
        </div>
        <div class="location__wrapper">
            <a href="location.html" class="location__wrapper--link location__wrapper--london">
           
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
        <button value="submit" class="location__view--btn orange-btn">VIEW ALL</button>
    </section>

    <section class="partners">
        <div class="partners__hero">
            <h1>Partners and Clients</h1>
        </div>
        <div class="partners__body">
            <h5>Our Clients</h5>
            <div class="owl-carousel owllogos owl-theme">
                <div class="owl__image">
                    <img src="assets/images/sahara bg.png" alt="">
                </div>
                <div class="owl__image">
                    <img src="assets/images/dangoteimg.png" alt="">
                </div>
                <div class="owl__image">
                    <img src="assets/images/christlogo.png" alt="">
                </div>
                <div class="owl__image">
                    <img src="assets/images/honeylogo.png" alt="">
                </div>
                <div class="owl__image">
                    <img src="assets/images/petrologo.png" alt="">
                </div>
            </div>
        </div>
    </section> 

    <div class="faq">
        <h2 class="faq__green--text">Frequently<br class=""> asked questions</h2>
        <div class="faq__body">
            <div>
                <div class="faq__question" data="faq__open--and-close">
                    <h5>Does the ticket fee cover return?</h5>
                    <div class="faq__question--plus">
                        <div class="faq__question--plus-icon">
                            <img src="./assets/images/plusicon.png" class="faq__plus" alt="">
                        </div>
                    </div>
                </div>
                <div class="faq__answer" data="faq__answer--on-load">
                    <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et agibfoghil</p>
                </div>
            </div>
            <div>
                <div class="faq__question" data="faq__open--and-close">
                    <h5>Does April Travel agency process visa to all countries?</h5>
                    <div class="faq__question--plus">
                        <div class="faq__question--plus-icon">
                            <img src="./assets/images/plusicon.png" class="faq__plus" alt="">
                        </div>
                    </div>
                </div>
                <div class="faq__answer" data="faq__answer--on-load">
                    <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et agibfoghil</p>
                </div>
            </div>
            <div>
                <div class="faq__question" data="faq__open--and-close">
                    <h5>Can i pay in installments?</h5>
                    <div class="faq__question--plus">
                        <div class="faq__question--plus-icon">
                            <img src="./assets/images/plusicon.png" class="faq__plus" alt="">
                        </div>
                    </div>
                </div>
                <div class="faq__answer" data="faq__answer--on-load">
                    <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et agibfoghil</p>

                </div>
            </div>
            <div>
                <div class="faq__question" data="faq__open--and-close">
                    <h5>Does April Travel ask for extra charges?</h5>
                    <div class="faq__question--plus">
                        <div class="faq__question--plus-icon">
                            <img src="./assets/images/plusicon.png" class="faq__plus" alt="">
                        </div>
                    </div>
                </div>
                <div class="faq__answer" data="faq__answer--on-load">
                    <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et agibfoghil</p>

                </div>
            </div>
        </div>
        <button href="/faq" class="faq__button orange-btn">View all</button>
    </div>

    <footer class="footer">
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
            <button class="footer__overlay--btn orange-btn">BOOK NOW</button>
        </div>
        <div class="footer__main">
            <div class="footer__main--container responsive">
                <a href="{{url('/')}}" class="footer__main--link active">
                    HOME
                </a>
                <a href="{{url('/about-us/')}}" class="footer__main--link">
                    ABOUT
                </a>
                <a href="{{url('/faq/')}}" class="footer__main--link">
                    WHY APRIL TRAVELS
                </a>

            </div>
            <div class="footer__main--right">
                <h6 id="Adeniyi Og.">DEVELOPED BY</h6>
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

    
    <script type="text/javascript">

        var path = "{{ route('autocomplete') }}";

                $('input.typeahead').typeahead({
                    minLength:1,
                    delay:500,
                    source:  function (query, process) {
                    return $.get(path, { query: query }, function (data) {
                        // console.log(query)
                        //  var i = 0;
                         
                        //  for(i = 0 ; i < data.length ; i++){
                            
                            //  console.log(data[i].country)
                             return process(data) ;

                        //    }
                        
                        });
                    }
                });


                // $('input.typeahead').typeahead({
                //     source: {
                //         groupName: {
                //             // Ajax Request
                //             ajax: {
                //                 url: "{{ route('autocomplete') }}"
                //             }
                //         }
                //     },
                //     callback: {
                //         onResult: function (node, query, result, resultCount, resultCountPerGroup) {
                //             console.log(node, query, result, resultCount, resultCountPerGroup);
                //         }
                //     }
                // });

    </script>


    <!-- build:js assets/scripts/App.js -->
    <script src="assets/scripts/jquery.waypoints.min.js"></script>
    <script src="assets/scripts/header.js"></script>
    <script src="assets/scripts/faq.js"></script>
    <script src="assets/scripts/onboard.js"></script>
    <script src="assets/scripts/onboardResp.js"></script>
    <script src="assets/scripts/desc.js"></script>
    <script src="assets/scripts/input.js"></script>
    <script src="jquery.min.js"></script>
    <script src="assets/scripts/owl.carousel.min.js"></script>
    <script src="assets/scripts/header.js"></script>
    <script src="assets/scripts/location.js"></script>

    <!-- endbuild -->

</body>

</html>