<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
       April-Travels - Tickets
    </title>
    <link rel="icon" href="{{asset('assets/favlogo.png')}}" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/admin.css" />
    <link rel="stylesheet" href="assets/fonts/AvenirLTStd-Black.otf">
    <script src="assets/scripts/admin.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha256-Z8TW+REiUm9zSQMGZH4bfZi52VJgMqETCbPFlGRB1P8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha256-ZvMf9li0M5GGriGUEKn1g6lLwnj5u+ENqCbLM5ItjQ0=" crossorigin="anonymous"></script>
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
          
            .deal--block {
                    padding: 15px;
                    align-items: center;
                    margin-bottom: 52px;
                    background: #F2F3F7;
                    border: 0.7px solid rgba(0, 0, 0, 0.52);
                    /* margin: -25px; */
             }
             .edit__btn_danger{
                 background:red;
             }
             .edit__btn_success{
                 background:green;
             }
             .title--block {
                padding: 48px 0px 15px 0px;
                width: 83%;
            }
             /* .deal__title{
                 margin-left:10px;
             } */
         .approve__btn{
             background:green;
         }
         .disapporve_btn{
             background: red;
         }
          </style>
</head>

<body>
    @include('sweet::alert')
    <div class="page">
       @include('includes.admin-header')

            <div class="deal__block--container">
                <h2>Ticket Class</h2>
                <div class="deals__container">
                    <div class="deals__row">
                      <p> Ticket Class</p>
                       <a href="{{url('/create-ticket-class/')}}"> <button class="deal__btn" type="submit">Create</button></a>
       
                    </div>
                    <div>
                        <table class="table table-bordered table-responsive">
                          <thead>
                            <tr>
                              <th>S/N</th>
                              <th>Name</th>
                              <th>Date/Time Added</th>
                              <th style="width:17%;">Action</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                              <?php $i = 0; ?>
                              @foreach($tickets as $ticket)
                            <?php $i++; ?>
                              <tr>
                                <td>{{$i}}</td>
                                <td>{{$ticket->name}}</td>
                              
                              <td>{{$ticket->created_at}}</td>
                                <td>
                                   <div class="deals__row deal__action--container">
                                        <a href="{{url('/edit-ticket-class/'.$ticket->id)}}" >
                                            <button class="edit__btn" style="width:100%;font-size:10pt;text-align:center;padding:8px;">Edit </button></a>
                                            @if($ticket->status == 0)
                                            <a href="{{url('/publish/ticket/'.$ticket->id)}}"  onclick="return confirm('Are you sure you want to publish Ticket Class ?')">
                                                <button class="edit__btn approve__btn" style="width:100%;font-size:10pt;text-align:center;padding:8px;">Publish </button></a>
                                            @else
                                            <a href="{{url('/unpublish/ticket/'.$ticket->id)}}" onclick="return confirm('Are you sure you want to unpublish Ticket Class ?')">
                                                <button class="edit__btn disapporve_btn" style="width:100%;font-size:10pt;text-align:center;padding:8px;">Unpublish</button></a>
                                            @endif
                                            <form method="post" class="" action="{{url('delete-ticket/'.$ticket->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{url('delete-ticket/'.$ticket->id)}}" onclick="return confirm('Are you sure you want to delete Ticket Class ?')">
                                                <button class="delete__btn" style="width:100%;font-size:10pt;text-align:center;padding:8px;">Delete</button></a>
                                        </form>
                                    </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table> 
                        
                        <div class="deals__page--index">
                        
                            {{$tickets->links()}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- <button class="submit__button" type="submit">Return to Main Site</button> -->

        </div>

    </div>

   

    <script src="assets/scripts/admin.js"></script>



</body>





</html>