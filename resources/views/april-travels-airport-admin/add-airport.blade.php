<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels - Add Airports 

    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/styles/admin.css" />
    <link rel="stylesheet" href="../assets/fonts/AvenirLTStd-Black.otf">
    <script src="../assets/scripts/admin.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha256-Z8TW+REiUm9zSQMGZH4bfZi52VJgMqETCbPFlGRB1P8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha256-ZvMf9li0M5GGriGUEKn1g6lLwnj5u+ENqCbLM5ItjQ0=" crossorigin="anonymous"></script>
<style>
    .input--field{
        width:500px;
        height:40px;
        background: #f4f5f8;
        border:0px;
        padding:10px;
    }

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
</head>

<body>
        @include('sweet::alert')
    <div class="page">
        @include('includes.admin-header')

            <div class="deal__block--container">
                <div class="deals__container ppad">
                    <div>                        
                        <div class="deals__row xpad">
                            <p class="page__title">Add Airport </p>
                            <div class="deal__action--container">
                    
                            </div>
                        </div>
                        <hr>
                        <div style="text-align:center;">
                            <small style="color:firebrick;">@error('country_name'){{$message}}@enderror</small><br>
                            <small style="color:firebrick;">@error('city_name'){{$message}}@enderror</small><br>
                            <small style="color:firebrick;">@error('airport_name'){{$message}}@enderror</small><br>
                        </div>
                        <form  method="POST" action="{{url('store-airport')}}"  enctype="multipart/form-data" class="deals__row xpad">
                            @csrf
                            <input type="text" class="input--field" placeholder="Country Name" name="country_name" value="{{old('country_name')}}" />
                            <input type="text" class="input--field" placeholder="City Name" name="city_name" value="{{old('city_name')}}" />
                            <input type="text" class="input--field" placeholder="Airport Name" name="airport_name" value="{{old('airport_name')}}" />
                            <div class="deal__action--container">
                                <button class="edit__btn">Save</button>
                        
                            </div>
                        </form>
                        <hr>
                      
                        
                    </div>
                </div>
            </div>

            <!-- <button class="submit__button" type="submit">Return to Main Site</button> -->

        </div>

    </div>



    <script src="../assets/scripts/admin.js"></script>



</body>





</html>