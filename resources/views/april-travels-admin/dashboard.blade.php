<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels Admin - Dashboard 
    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/admin.css" />
    <link rel="stylesheet" href="assets/fonts/AvenirLTStd-Black.otf">
    <script src="assets/scripts/admin.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
    <style>
  .logout-btn{
      color:white;
      text-decoration:none;
  }
  a:focus, a:hover {
    color: #FF5E16;
    text-decoration: none;
}

    </style>
</head>

<body>

    <div class="page">
         @include('includes.admin-header')

            <div class="main-body__content">

                
                <a href="{{url('/service-area')}}" class="main-body__content--container location">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Bookings/Services</span></div></a> 
                <a href="{{url('/pages/')}}" class="main-body__content--container update">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Pages Update</span></div></a>
              
                <a href="{{url('/all-deals/')}}" class="main-body__content--container booking">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Flight Deals</span></div></a>
               
                @can('super-only', auth()->user())
                <a href="{{url('/all-admin/')}}" class="main-body__content--container management">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Admin Management</span></div></a>
                @endcan  
                <a href="{{url('/upadte-password/'.Auth::user()->id)}}" class="main-body__content--container password">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Change Password</span></div></a>
                <a href="{{url('/contact-developer/')}}" class="main-body__content--container contact">
                    <div><img src="assets/backendImages/greenbar.png" alt="" class="green__bar"><span>Contact KJK Africa</span></div></a>

            </div>

            <!-- <button class="submit__button" type="submit">Return to Main Site</button> -->

        </div>

    </div>

    <script type="text/javascript">
        
        var path = "{{ route('autocomplete-search') }}";
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
        
    </script>

    <script src="assets/scripts/admin.js"></script>



</body>





</html>