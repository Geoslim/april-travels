<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels Limited
    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
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

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha256-Z8TW+REiUm9zSQMGZH4bfZi52VJgMqETCbPFlGRB1P8=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha256-ZvMf9li0M5GGriGUEKn1g6lLwnj5u+ENqCbLM5ItjQ0=" crossorigin="anonymous"></script>


    <!-- endbuild -->

    <style>
            .typeahead .dropdown-item{
            width:260px;
         
            }
            .onboard__tab--menu-link , ..onboard__tab--menu-current{
                padding: 26px 1vw 36px;
                /* flex: 1; */
                background-color: rgba(0, 0, 0, .7);
                font-family: 'Avenir 07', sans-serif;
                color: #fff;
                font-size: 19px;
                position: relative;
                display: inline-block;
                vertical-align: top;
                text-decoration: none;
                text-align: left;
                cursor: pointer;
                /* border-radius: 10px; */
           }
          
           .onboard__tab--menu-link:hover {
                padding: 26px 1vw 36px;
                /* flex: 1; */
                background-color: rgba(0, 0, 0, .7);
                font-family: 'Avenir 07', sans-serif;
                color: #fff;
                font-size: 19px;
                position: relative;
                display: inline-block;
                vertical-align: top;
                text-decoration: none;
                text-align: left;
                cursor: pointer;
                /* border-radius: 10px; */
           }
           p {
            margin: 0px;
           }
            
                   
            a:focus, a:hover {
                color: #8dc63f;
                text-decoration: none;
            }
            .dropdown-menu{
                font-size:10px;
                /* width:300px; */
            }
            .dropdown-menu>.active>a, .dropdown-menu>.active>a:focus, .dropdown-menu>.active>a:hover {
                    color: #fff;
                    text-decoration: none;
                    background-color: #2bb673;
                    /* background-color: #32ad0a; */
                    outline: 0;
                    width:400px;
        
         }
        .dropdown-menu {

                    font-size: 10px;
                    width: 400px;

        }
        @media only screen and (max-width:848px){
    .small, small {
        font-size: 68%;
        padding-right: 7px;
    }
}
      @media only screen and (max-width:668px){
    .small, small {
        font-size: 63%;
    }
}

@media only screen and (max-width:620px){
    .small,small {
        font-size: 55%;
        padding: 0px 2px 0px 4px;
      
    }
}
@media only screen and (max-width:560px){
    .small,small {
        font-size: 55%;
        padding: 0px 6px 0px 0px;
      
    }
}
@media only screen and (max-width:512px){
    .small,small{
        font-size: 80%;
        transform: translateY(3px);
      padding: 0px 5px 0px 4px;
    }
}
@media only screen and (max-width:450px){
    .small,small {
        font-size: 90%;
        
    }
}
@media only screen and (max-width:390px){
    .small,small {
       padding: 0px 5px 0px 11px;
        
    }
}
.modal-backdrop{
    z-index: 1;
}
.modal-dialog {
    /*width: 55%;*/
    margin: 30px auto;
}

@media only screen and (min-width: 318px) {
.modal__dialog {
    width: 90%;
    
}
}


@media only screen and (min-width: 887px) {
.modal__dialog {
    width: 82%;
    
}
}
@media only screen and (min-width: 967px) {
.modal__dialog {
    width: 75%;
    
}
}
@media only screen and  (min-width: 1065px) {
.modal__dialog {
    width: 68%;
    
}
}
@media only screen and  (min-width: 1216px) {
.modal__dialog {
    width: 60%;
    
}
}
@media only screen and (min-width: 1315px) {
.modal__dialog {
    width: 55%;
    
}
}
.modal-content {
   background: linear-gradient(48.66deg, rgba(29, 59, 45, 0.66) 10.34%, rgba(59, 183, 143, 0.80) 70.69%);

    }
.modal-content input{
    background: #eee;
    height: 30px;
     border-radius: 5px;
    text-align: left;
    color: #555;
    font-weight: 100;
    }

@media only screen and (max-width: 800px) {
.modal-content input{
    width: 100%;
    
}
}


.modal-content select{
         background: #eee;
    height: 30px;
    border-radius: 5px;
    text-align: left;
    color: #555;
    font-weight: 100;
}

@media only screen and (max-width: 800px) {
.eco__selct{
    
    width: 100%;
    
}
}
.multi__modal {
    font-size: 20px;
    cursor: pointer;
    color: white;
}
@media only screen and (max-width: 768px) {
.multi__modal{
    
    font-size: 15px;
    
}
}
@media only screen and (max-width: 512px) {
.multi__modal{
    
    font-size: 11px;
    padding-right: 20px;
    
}
}
@media only screen and (max-width: 375px) {
.multi__modal{
    
    font-size: 10px;
    
}
}
@media only screen and (max-width: 340px) {
.multi__modal{
    
    font-size: 9px;
    
}
}


    </style>
   
</head>

<body>
        @include('sweet::alert')
    <div class="mainContainer">

        <div class="header__top--fixed header__top--show">
            <div>
                <img src="./assets/images/fixedhamburger.png" alt="button" class="header__column--toggler">
                <img src="./assets/images/missionlg.png" alt="" class="header__column--logo">
                <img src="./assets/images/fixedimgtext.png" alt="" class="header__column--text fixed">
            </div>
            <div class="header__top--fixed-right">
                <img src="assets/images/iatalogo.png" class="header__iata" alt="">
                <img src="assets/images/nanta.png" alt="" class="header__nanta">
            </div>

        </div>
        <header class="header">
            <div class="header__top--flex-right">
                <img src="assets/images/iatalogo.png" class="header__iata" alt="">
                <div>
                    <img src="assets/images/nanta.png" alt="" class="header__nanta">
                    <img src="assets/images/missionlg.png" alt="" class="header__mission">
                </div>
            </div>
            <div class="header__column">
                <div class="header__column--description">
                    <img src="./assets/images/button.png" alt="button" class="header__column--toggler">
                    <a href="{{url('/')}}">
                        <img src="./assets/images/logo.png" alt="" class="header__column--logo">
                    </a>
                    <a href="{{url('/')}}">
                        <img src="./assets/images/WHITE.png" alt="" class="header__column--text">
                    </a>
                </div>

                <div class="header__body">
                    <h1 class="header__body--hero">Explore the World<br> With us</h1>
                    <div class="header_body--description">
                        <p class="header__body--description">Travel to your Fantasy Land in comfort</p>
                    </div>
                    <div class="header__form--radio">
                            <p>
                                <input type="radio"  id="oneway" onclick="ShowHideDiv()" name="radio_g" value="one_way {{ Session::get('booking') == 'one_way' ? 'checked' : ''}}" checked>
                                <label for="oneway">
                                    <span>
                                        ONE WAY
                                    </span>
                                </label>
                            </p>
                            <p class="extra__padding">
                                <input type="radio"  id="roundtrip" onclick="ShowHideDiv()" name="radio_g" value="round_trip">
                                <label for="roundtrip">ROUND TRIP</label>
                            </p>
                             <p class="">
                                <input type="radio"  id="multiple"  name="radio_g" value="multiple_destination">
                                <a class="multi__modal" data-toggle="modal" data-target="#myModal">
                                    MULTIPLE DESTINATIONS
                                </a>
                                
                            </p>
                           
                        </div>

                 

                    <form action="{{url('/add-bookings/')}}" method="POST"class="header__form" id="normal-form">
                        @csrf
                       
                        <div class="header__form--container">
                            <p class="header__form--container-description">From</p>
                            <small style="color:#AEF849;">@error('departure'){{$message}}@enderror</small>
                            <div class="header__form--container-body">
                                <input type="text" id="airport_name" name="departure" class="header__form--container-body-text typeahead search-input"
                                placeholder="Kano International Airport" autocomplete="off" value="{{ old('departure') }}">
                                    {{-- <ul class="typeahead dropdown-menu" role="listbox" style="top: 37.8182px; left: 3.99148px; display: none;">
                                        <li class="active"><a class="dropdown-item" href="#" role="option"><small></small></a></li>
                                    </ul> --}}
                                    
                                <div class="clck__item">
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;&nbsp;
                                    <img src="./assets/images/gps.png" alt="" class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header__form--container">
                            <p class="header__form--container-description">To</p>
                            <small style="color:#AEF849;">@error('arrival'){{$message}}@enderror</small>
                            <div class="header__form--container-body">
                                <input name="arrival" class="header__form--container-body-text typeahead"
                                    placeholder="Heathrow International Airport" autocomplete="off" value="{{ old('arrival') }}">
                            </div>
                        </div>
                        <div class="header__form--container header__form--container-screens">
                            <p class="header__form--container-description">Departure</p>
                            <small style="color:#AEF849;">@error('departure_date'){{$message}}@enderror</small>
                            <small id='printchatbox'></small>
                            <div class="header__form--container-body">
                                <input type="date" name="departure_date" id="departure_date" onchange="detectDepartureDate()" class="header__form--container-body-text txtDate"
                                    data-date-format="DD MMMM YYYY" value="{{ old('departure_date') }}" min="<?php echo date("Y-m-d") ?>">
                                <div class="clck__item">
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;&nbsp;
                                    <img src="./assets/images/calendar.png" alt=""
                                        class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        
                           
                        <div class="header__form--container header__form--container-screens" id="return_date_div" style="display:none;">
                            <p class="header__form--container-description">Return date</p>
                            <div class="header__form--container-body">
                                <input type="date" id="return_date" name="return_date" class="header__form--container-body-text txtDate"
                                    data-date-format="DD MMMM YYYY" value="{{ old('return_date') }}" min="<?php echo date("Y-m-d") ?>">
    
                                <div class="clck__item">
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;&nbsp;
                                    <img src="./assets/images/calendar.png" alt=""
                                        class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="header__form--container header__form--container-screens">
                            <div class="header__form--container-description passenger">Passenger <span class="white__dot"></span>
                                Class
                            </div>
                            <small style="color:#AEF849;">@error('passenger_class'){{$message}}@enderror</small>

                            <div class="header__form--container-body extra__5kpad">
                                <div class="header__drop">
                                    <select name="passenger_class">
                                    <option value="{{$passengerClass[0]->name}}">
                                            <span class="header__form--container-body-text no__wrap">
                                                {{$passengerClass[0]->name}}
                                            </span>
                                        </option>
                                         <option value="">
                                            <span class="header__form--container-body-text no__wrap">
                                                Select Passenger Class
                                            </span>
                                        </option>
                                        @foreach($passengerClass as $class)
                                        <option value="{{$class->name}}">
                                            <span class="header__form--container-body-text no__wrap">
                                                &nbsp;<span class="brown__dot"></span>
                                              {{$class->name}}
                                            </span>
                                        </option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                                <div class="clck__item">
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;
                                    <img src="./assets/images/person.png" alt=""
                                        class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div> --}}
                        <div class="header__form--container header__form--container-screens">
                            <p class="header__form--container-description">Ticket Class</p>
                            <small style="color:#AEF849;">@error('ticket_class'){{$message}}@enderror</small>

                            <div class="header__form--container-body extra__5kpad">
                                <div class="header__drop">
                                    <select name="ticket_class">
                                        <option value="">
                                            <span class="header__form--container-body-text no__wrap">
                                                Select Ticket Class
                                            </span>
                                        </option>
                                        {{-- <option value="{{$ticketClass[0]->name}}">
                                            <span class="header__form--container-body-text no__wrap">
                                                {{$ticketClass[0]->name}}
                                            </span>
                                        </option> --}}
                                        @foreach($ticketClass as $ticket)
                                        <option value="{{$ticket->name}}">
                                            <span class="header__form--container-body-text no__wrap">
                                               {{$ticket->name}}
                                            </span>
                                        </option>
                                        @endforeach
                                      
                                    </select>
                                    
                                </div>
                                <div class="clck__item">
                                    <img src="./assets/images/dash.png" alt=""
                                        class="header__form--container-body-dash">&nbsp;
                                    <img src="./assets/images/card.png" alt=""
                                        class="header__form--container-body-icon">
                                </div>
                            </div>
                        </div>
                        <div class="header__form--container header__form--container-screens" >
                            <div class="header__form--container-description passenger">Passengers
                            </div>
                            <small style="color:#AEF849;">@error('adults'){{$message}}@enderror</small>
                            <small style="color:#AEF849;">@error('children'){{$message}}@enderror</small>
                            <small style="color:#AEF849;">@error('infants'){{$message}}@enderror</small>

                            <div class="header__form--container-body extra__5kpad" style=" ">
                                <div class="header__form--container-description passenger" style="margin:0;">
                                    <small>Adults</small>
                                </div>
                                <div class="header__drop">
                                   <select id="adults" name="adults">
                                       <option value=""></option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                   </select>
                                </div>
                                <div class="header__form--container-description passenger">
                                    <small>Children</small>
                                </div>
                                <div class="header__drop" >

                                   <select id="children" name="children">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                    <div class="header__form--container-description passenger">
                                        <small>Infants</small>
                                    </div>
                                    <div class="header__drop" >
                                    <select id="infants" name="infants">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="header__form--container header__form--container-screens" style="display:block; width: 100%; margin-top:12px;">
                            
                            <button value="submit" class="header__form--submit orange-btn">BOOK NOW</button>

                        </div>
                    </form>


                            <!-- multiple destination -->

                            <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog" style="    background: linear-gradient(48.66deg, rgba(121, 64, 59, 0.66) 27.34%, rgba(68, 118, 113, 0.8) 91.69%);">
                            <div class="modal-dialog modal__dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Multiple Destinations Booking</h4>
                                </div>
                                <div class="modal-body" style="width:100%;">
                                  <form action="{{url('/add-multiplebookings/')}}" method="POST"class="" id="" style="">
                                @csrf
                                <button type="button" name="add" id="add" class="btn btn-sm" style="color: #000;">Add More</button>
                                <div class="" id="dynamic_field">
                                    <div class="multi__field">
                                     
                                       <!--  <span class="col-m">From:</p>
                                        <span class="col-m">To:</p>
                                        <span class="col-m">Date:</p>
                                        <span class="col-m">Ticket:</p> -->
                                   
                                        <div class="" >
                                            <small style="color:#AEF849;">@error('departure'){{$message}}@enderror</small>
                                            <input type="text" id="airport_name" name="departure1[]" class="typeahead search-input" placeholder="Departure" autocomplete="off" value="">
                                        </div>
                                        <div class="">
                                             <small style="color:#AEF849;">@error('arrival'){{$message}}@enderror</small>
                                            <input type="text" id="airport_name" name="arrival1[]" class=" typeahead search-input" placeholder="Arrival" autocomplete="off" value="">
                                        </div>
                                        <div class="">
                                            <small style="color:#AEF849;">@error('departure_date'){{$message}}@enderror</small>
                                            <input type="date" id="departure_date" name="departure_date1[]" class="txtDate typeahead search-input" autocomplete="off" data-date-format="DD MMMM YYYY" value="" min="<?php echo date("Y-m-d") ?>">
                            
                                        </div>
                                        <div class="">
                                            <small style="color:#AEF849;">@error('ticket_class'){{$message}}@enderror</small>
                                            <select name="ticket_class1[]" class="eco__selct">
                                                @foreach($ticketClass as $ticket)
                                                <option  value="{{$ticket->name}}">
                                                    <span class="header__form--container-body-text no__wrap">
                                                       {{$ticket->name}}
                                                    </span>
                                                </option>
                                                @endforeach
                                            </select>
                            
                                        </div>
                                           <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="display:contents;color: transparent;">X</button>
                                    </div>

                                </div>
                               
                                <div class="">
                                    
                                        <div class="">
                                              <p style="line-height: 40px">Passengers</p>  
                                        </div>
                                        <div class="">
                                            <select id="adults" name="adults1">
                                               <option value="">Adults</option>
                                               <option value="1">1</option>
                                               <option value="2">2</option>
                                               <option value="3">3</option>
                                               <option value="4">4</option>
                                               <option value="5">5</option>
                                               <option value="6">6</option>
                                           </select>
                                            <select id="children" name="children1">
                                                <option value="">Children</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                            <select id="infants" name="infants1">
                                                <option value="">Infants</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>

                                        </div>
                                            
                                               
                                </div>
                               
                              
                           
                    

                        <div class="header__form--container header__form--container-screens" style="display:block; width: 100%; margin-top:12px;">
                            
                            <button value="submit" class="header__form--submit orange-btn">BOOK NOW</button>

                        </div>
                    </form>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                      
                   
                </div>
                <div class="bg__inactive">
                    <div class="header__menu">

                        <div class="header__menu--close"></div>
                        <div class="header__menu--wrapper">
                            <a href="{{url('/')}}" class="header__menu--container active">
                                <img src="assets/images/homeicon.png" alt=""> <span class="header__menu--link">
                                    HOME</span>
                            </a>
                            <a href="{{url('/about-us/')}}" class="header__menu--container">
                                <img src="assets/images/abouticon.png" alt="">
                                <span class="header__menu--link"> ABOUT
                                </span>
                            </a>
                            <a href="{{url('/deals/')}}" class="header__menu--container">
                                <img src="assets/images/dealsicon.png" alt=""><span class="header__menu--link"> DEALS
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
                <img src="./assets/images/missionlg.png" alt="" class="description__mission--container-logo">&nbsp;
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
                                    <span> Member of NANTA </span><br><br>
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
                            <button href=""
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn">
                                <a href="{{url('/contact-us')}}">
                                    CONTACT US
                                </a>
                            </button>
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
                        <button href=""
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn responsive">
                                <a href="{{url('/contact-us')}}">
                                    CONTACT US
                                </a>
                        </button>

                    </div>
                </div>
                <div data-tab="Step 2" class="onboard__tab--content-pane">
                    <div class="onboard__tab--content-pane-wrapper">
                        <div class="onboard__tab--content-pane-wrapper-left">
                            <h2 class="onboard__card--wrapper-hero green-text onboard__card--icon emergency">Emergency
                                <br>Booking</h2>
                            <button href=""
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn">
                                <a href="{{url('/contact-us')}}">
                                    CONTACT US
                                </a>
                            </button>
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
                        <button href=""
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn responsive">
                                <a href="{{url('/contact-us')}}">
                                    CONTACT US
                                </a>
                        </button>
                    </div>
                </div>
                <div data-tab="Step 3" class="onboard__tab--content-pane">
                    <div class="onboard__tab--content-pane-wrapper">
                        <div class="onboard__tab--content-pane-wrapper-left">
                            <h2 class="onboard__card--wrapper-hero green-text onboard__card--icon package">Hospitality
                                <br> Service </h2>
                            <button href=""
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn">
                                <a href="{{url('/contact-us')}}">
                                    CONTACT US
                                </a>
                        </button>
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
                        <button href=""
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn responsive">
                                <a href="{{url('/contact-us')}}">
                                    CONTACT US
                                </a>
                        </button>
                    </div>
                </div>
                <div data-tab="Step 4" class="onboard__tab--content-pane">
                    <div class="onboard__tab--content-pane-wrapper minor">
                        <div class="onboard__tab--content-pane-wrapper-left">
                            <h2 class="onboard__card--wrapper-hero green-text onboard__card--icon package">Packaged
                                <br>Service
                            </h2>
                            <button href=""
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn">
                                <a href="{{url('/contact-us')}}">
                                    CONTACT US
                                </a>
                            </button>
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
                        <button href=""
                                class="onboard__tab--content-pane-wrapper-left-btn lemon-btn responsive">
                                <a href="{{url('/contact-us')}}">
                                    CONTACT US
                                </a>
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
                            <h4 class="onboard__card--wrapper-hero green-text">Easy Booking <br class="nobreak"> Process
                            </h4>
                            <p class="onboard__card--wrapper-text">The process of booking is very stressfree and easy.
                                We
                                send your confirmation immediately</p>
                        </div>
                    </div><br>
                    <div class="onboard__card--wrapper-long-bg"></div>
                    <a class="long__btn" href="{{url('/about-us/')}}"><button class="onboard__card--wrapper-long-btn orange-btn">LEARN MORE</button></a>
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
                                <p class="onboard__card--wrapper-text">At vero eos et accusamus et iusto odio
                                    dignissimos
                                    ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
                                    et
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
    {{-- <section class="location">
        <div class="location__hero">
            <h1 class="location__hero--text green-text">Deals &amp; Offers</h1>
        </div>
        @foreach($deals as $deal)
        <div class="location__wrapper">
          
            <div>
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
                    <img src="assets/images/londonbg.png" alt="">
                </a>
            </div>
     
        </div>
        @endforeach
    
        <button value="submit" class="location__view--btn orange-btn">VIEW ALL</button>
    </section> --}}
    <section class="location location__location">
        <div class="location__hero">
            <h1 class="location__hero--text green-text">Deals &amp; Offers</h1>
        </div>
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
                        <div class="location__wrapper--link-bottom" style="z-index: 100; border-radius:10px ">
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
            {{-- <div class="location__border"></div> --}}
            </div>
            
     
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
        <a href="{{url('/faq/')}}"><button  class="faq__button orange-btn">View all</button></a>
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
            <button class="footer__overlay--btn orange-btn" id="book__btn">BOOK NOW</button>
        </div>
        <div class="footer__main">
            <div class="footer__main--container responsive">
                <a href="{{url('/')}}" class="footer__main--link active">
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
$(document).ready(function(){
    // var maxField = 6; //Input fields increment limitation
    // var addButton = $('.add_button'); //Add button selector
    // var wrapper = $('.field_wrapper'); //Input field wrapper
    // var fieldHTML = ' <div class="header__form--container"><p class="header__form--container-description">From</p><small style="color:#AEF849;">@error('departure'){{$message}}@enderror</small><div class="header__form--container-body"><input type="text" id="airport_name" name="departure" class="header__form--container-body-text typeahead search-input" placeholder="Kano International Airport" autocomplete="off" value="{{ old('departure') }}"></div></div></div><a href="javascript:void(0);" class="remove_button">remove</a>'; //New input field html 
    // var x = 1; //Initial field counter is 1
    
    // //Once add button is clicked
    // $(addButton).click(function(){
    //     //Check maximum number of input fields
    //     if(x < maxField){ 
    //         x++; //Increment field counter
    //         $(wrapper).append(fieldHTML); //Add field html
    //     }
    // });
    
    // //Once remove button is clicked
    // $(wrapper).on('click', '.remove_button', function(){
    //     $(this).parent('div').remove(); //Remove field html
    //     x--; //Decrement field counter
    // });
});
</script>

    <script type="text/javascript">
        
        var path = "{{ route('autocomplete') }}";
        $('input.typeahead').typeahead({
                    minLength:1,
                    delay:500,
                    source:  function (query, process) {
                    return $.get(path, { query: query }, function (data) {

                    //    console.log(process)
                        // data = data[0].name  + ' ' + ( data[0].country )
                     console.log(data)
                    //  document.write(data)
                    // document.getElementsByClassName('.typeahead').innerHTML = data
             
                            return process(data) ;

                        });
                    },
                    
                });
                                

        function detectDepartureDate(){
        var picked_depature_date = document.getElementById("departure_date").value;
        // document.getElementById("printchatbox").innerHTML= picked_depature_date;
        document.getElementById("return_date").min= picked_depature_date;
        }

        function ShowHideDiv() {
        var oneWay = document.getElementById("oneway");
        var returnDateDiv = document.getElementById("return_date_div");
        returnDateDiv.style.display = oneWay.checked ? "none" : "block";
       
       
    }

     
    </script>
           
            
    <script>  
 $(document).ready(function(){  
      var i=1;  
      var maxField = 6;
      var x = 1;
      $('#add').click(function(){  
           i++;  
           if(x < maxField){ 
            x++; //Increment field counter     
           $('#dynamic_field').append('<div id="row'+i+'" class="multi__field"><div class="" ><small style="color:#AEF849;">@error('departure'){{$message}}@enderror</small><input type="text" id="airport_name" name="departure1[]" class="typeahead search-input" placeholder="Departure" autocomplete="off" value=""></div><div class=""><small style="color:#AEF849;">@error('arrival'){{$message}}@enderror</small><input type="text" id="airport_name" name="arrival1[]" class=" typeahead search-input" placeholder="Arrival" autocomplete="off" value=""></div><div class=""><small style="color:#AEF849;">@error('departure_date'){{$message}}@enderror</small><input type="date" id="departure_date" name="departure_date1[]" class="txtDate typeahead search-input" autocomplete="off" data-date-format="DD MMMM YYYY" value="{{ old('departure_date') }}" min="<?php echo date("Y-m-d") ?>"></div><div class=""><small style="color:#AEF849;">@error('ticket_class'){{$message}}@enderror</small><select name="ticket_class1[]" class="">@foreach($ticketClass as $ticket) <option <span class="header__form--container-body-text no__wrap"> {{$ticket->name}}</span></option>@endforeach</select></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="display:contents;">X</button></div>');  
     }
      });  

      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"name.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      });  
 });  
 </script>
  
    
    <!-- build:js assets/scripts/App.js -->
    <script src="assets/scripts/jquery.waypoints.min.js"></script>
    <script src="assets/scripts/header.js"></script>
    <script src="assets/scripts/faq.js"></script>
    <script src="assets/scripts/onboard.js"></script>
    <script src="assets/scripts/onboardResp.js"></script>
    <script src="assets/scripts/desc.js"></script>
    <script src="assets/scripts/input.js"></script>
    <script src="assets/scripts/jquery-3.3.1.min.js"></script>
    <script src="assets/scripts/owl.carousel.min.js"></script>
    <script src="assets/scripts/header.js"></script>
    <script src="assets/scripts/location.js"></script>
    <script src="assets/scripts/dropdown.js"></script>
    <!-- <script type="text/javascript" src="assets/scripts/booking.js"></script> -->
    <!-- endbuild -->

</body>

</html>