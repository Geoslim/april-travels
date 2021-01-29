<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels - Import Airports 

    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/admin.css" />
    <link rel="stylesheet" href="assets/fonts/AvenirLTStd-Black.otf">
    <style type="text/css">
        a:focus, a:hover {
    color: #FF5E16;
    text-decoration: none;
        }
    </style>
    <script src="assets/scripts/admin.js"></script>
</head>

<body>

    <div class="page">
        @include('includes.admin-header')
            <div class="deal__block--container">
                <div class="deals__container ppad">
                    <div>                        
                        <div class="deals__row xpad">
                            <p class="page__title">Import Data</p>
                            <div class="deal__action--container">
                    
                            </div>
                        </div>
                        <hr>
                        <form  method="POST" action="{{url('/import-data/')}}"  enctype="multipart/form-data" class="deals__row xpad">
                            @csrf
                            <input type="file" name="file"/>
                           
                            <div class="deal__action--container">
                                <button class="edit__btn">Import Data</button>
                        
                            </div>
                        </form>
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