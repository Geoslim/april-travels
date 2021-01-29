<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="../vendors/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/css/owl.theme.default.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>
        
        April - Travels
       
    </title>
    <style>
            .header__logo{
                margin-top:-30px;
            }
            th , td {
                padding:10px;
            }
            table{
                border:1px solid black;
            }
            .pending_approval{
                color:red;
            }
            .booked{
                color:green;
            }

    </style>

</head>

</head>


<body>

<div>
        <img src="'. public_path() .'/../assets/backendimages/aprillg.png" alt="" class='header__logo'>

        <img src="'. public_path() .'/../assets/images/fixedimgtext.png" alt="">
        <hr>  
</div>


<div>

<h1>Booking Information 
    <em>
    @if($show->status == 0)
 <span class="pending_approval"> (  Pending Approval )</span>
    @else
 <span class="booked">  (  Booked ) </span>
    @endif

    </em>
</h1>

</div>
      <h4>Basic Information</h4>
         <div>
       
            <table class="table">
            <thead>
                <tr>
                    <th>Surname</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Email</th>
                    <td>Date of Birth</td>
                    <td>Phone Number</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">{{$show->last_name}}  </td>
                    <td>{{$show->first_name}}</td>
                    <td>{{$show->middle_name}}</td>
                    <td>{{$show->email}}</td>
                    <td>{{$show->dob}}</td>
                    <td>{{$show->phone_number}}</td>
                </tr>
            
            </tbody>
            </table>
         </div>

         <h4>Address</h4>
            <div>
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan='2'>Address</th>
                        <th>passport ID</th> 
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row" colspan="2">{{$show->address}}  </td>
                        <td>{{$show->passport_id}}</td>
                    </tbody>
                </table>
             </div>


             <h4>Flight Information</h4>
            <div>
                <table class="table">
                    <thead>
                    <tr>
                            <th colspan='2'>Departure</th>
                            <th>Departure Date</th>
                            <th>Arrival</th> 
                            <th>Arrival Date</th>
                            <th>Passenger Class</th>
                            <th>Ticket Class</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td scope="row" colspan="2">{{$show->destination_from}}  </td>
                            <td>{{$show->departure}}</td>
                            <td>{{$show->destination_to}}</td>
                            <td>{{$show->arrival}}</td>
                            <td>{{$show->passenger_class}}</td>
                            <td>{{$show->ticket_class}}</td>
                    </tbody>
                </table>
             </div>


