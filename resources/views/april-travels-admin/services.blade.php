<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
       April Travels Admin - Services 
    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/admin.css" />
    <link rel="stylesheet" href="assets/fonts/AvenirLTStd-Black.otf">
    <script src="assets/scripts/admin.js"></script>
</head>
<style>
  .logout-btn{
      color:white;
      text-decoration:none;
  }
  .logout-btn:hover , .side-navigation__menu-link:hover{
      color:#fff;
      text-decoration:none;
  }
  a:focus, a:hover {
    color: #FF5E16;
    text-decoration: none;
}


</style>
<body>

    <div class="page">
        @include('includes.admin-header')

        

            <div class="main-body__content">

               {{-- <a href="{{url('/all-passenger-class/')}}" class="main-body__content--container update">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Passenger Class</span></div></a> --}}
                <a href="{{url('/all-bookings/')}}" class="main-body__content--container location">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>All Bookings</span></div></a>
                <a href="{{url('/all-ticket-class/')}}" class="main-body__content--container booking">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Ticket Class</span></div></a>
                <a href="{{url('/all-airports/')}}" class="main-body__content--container location">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Airports</span></div></a>
                {{-- <a href="" class="main-body__content--container management">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Admin Management</span></div></a>
                <a href="" class="main-body__content--container password">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Change Password</span></div></a>
                <a href="https://www.kjk.com.ng/" class="main-body__content--container contact">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Contact KJK Africa</span></div></a> --}}

            </div>

            <!-- <button class="submit__button" type="submit">Return to Main Site</button> -->

        </div>

    </div>



    <script src="assets/scripts/admin.js"></script>



</body>





</html>