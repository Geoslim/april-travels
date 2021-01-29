<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels - Pages 
    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/admin.css" />
    <link rel="stylesheet" href="assets/fonts/AvenirLTStd-Black.otf">
    <script src="assets/scripts/admin.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>

.deals__row.xpad {
    padding: 41px 20px 15px 80px;
}
a:focus, a:hover {
    color: #FF5E16;
    text-decoration: none;
}
    </style>
     <script src="js/sweetalert.min.js"></script>
     {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha256-Z8TW+REiUm9zSQMGZH4bfZi52VJgMqETCbPFlGRB1P8=" crossorigin="anonymous" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha256-ZvMf9li0M5GGriGUEKn1g6lLwnj5u+ENqCbLM5ItjQ0=" crossorigin="anonymous"></script> --}}
</head>

<body>
       

       
        @include('sweet::alert')
    <div class="page">
        @include('includes.admin-header')

            <div class="deal__block--container">
                <div class="deals__container ppad">
                    <div>                        
                        <div class="deals__row xpad">
                            <p class="page__title">Pages <small>     </small> </p>
                            <div class="deal__action--container">

                            
                            </div>
                        </div>
                      
                       
                        <div class="deals__row xpad">
                            <p class="page__title">Home Page</p>
                            <div class="deal__action--container">
                                <button class="edit__btn">Edit</button>
                               <!--  <button class="unfreeze__btn">Unfreeze</button>
                                <button class="delete__btn">Delete</button> -->
                            </div>
                        </div>
                        <hr>
                        <div class="deals__row xpad">
                            <p class="page__title">About</p>
                            <div class="deal__action--container">
                                <button class="edit__btn">Edit</button>
                               <!--  <button class="unfreeze__btn">Unfreeze</button>
                                <button class="delete__btn">Delete</button> -->
                            </div>
                        </div>
                        <hr>
                        <div class="deals__row xpad">
                            <p class="page__title">Deals & Offers</p>
                            <div class="deal__action--container">
                                <button class="edit__btn">Edit</button>
                                <!-- <button class="unfreeze__btn">Unfreeze</button>
                                <button class="delete__btn">Delete</button> -->
                            </div>
                        </div>
                        <hr>
                        <div class="deals__row xpad">
                            <p class="page__title">FAQ</p>
                            <div class="deal__action--container">
                                <button class="edit__btn">Edit</button>
                              <!--   <button class="unfreeze__btn">Unfreeze</button>
                                <button class="delete__btn">Delete</button> -->
                            </div>
                        </div>
                        <hr>
                         <div class="deals__row xpad">
                            <p class="page__title">Contact</p>
                            <div class="deal__action--container">
                                <button class="edit__btn">Edit</button>
                               <!--  <button class="unfreeze__btn">Unfreeze</button>
                                <button class="delete__btn">Delete</button> -->
                            </div>
                        </div>
                        <hr>
                    </div>
                    
                </div>
                
            </div>

            <!-- <button class="submit__button" type="submit">Return to Main Site</button> -->

        </div>

    </div>



    <script src="assets/scripts/admin.js"></script>



</body>





</html>