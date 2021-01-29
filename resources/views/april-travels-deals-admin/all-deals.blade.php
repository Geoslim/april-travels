<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        April Travels - Deals
 
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
          .booking__btn{
              margin-left:-0;
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
                <h2>Deals</h2>
                <div class="deals__container">
                    <div class="deals__row">
                        <p>List of deals ({{$countDeals}})</p>
                       <a href="{{url('/new-deal/')}}"> <button class="deal__btn" type="submit">Create New deal</button></a>
                     
                    </div>
                    <div>
                         <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>S/N</th>
                              <th>Image</th>
                              <th>Title</th>
                              <th>Price</th>
                              <th>Discount</th>
                              <th>Date/Time Added</th>
                              <th style="width:17%;">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              
                                <?php $i = 0; ?>
                                @foreach($allDeals as $deal)
                                <?php $i++; ?>
                              <tr>
                                <td>{{$i}}</td>
                              <td><img src="{{ asset('storage/'.$deal->thumbnail) }}" alt=""></td>
                              <td>{{Ucfirst($deal->location)}}</td>
                              <td>&#8358;{{number_format($deal->amount)}}</td>
                              <td>{{$deal->discount}}%</td>
                              <td>{{$deal->created_at}}</td>
                              <td>
                                   <div class="deals__row deal__action--container">
                                        <a href="{{url('/edit-deals/'.$deal->id)}}" >
                                            <button class="edit__btn" style="width:100%;font-size:10pt;text-align:center;padding:8px;">Edit</button></a>
                                        @if($deal->is_published == 0)
                                        <a href='{{url('/publish-deals/'.$deal->id)}}' onclick="return confirm('Are you sure you want to publish deals and offers ?')">
                                            <button class="delete__btn" style="width:100%;font-size:10pt;text-align:center;padding:8px;">Publish</button></a>
                                        @else 
                                        <a href='{{url('/unpublish-deals/'.$deal->id)}}' onclick="return confirm('Are you sure you want to unpublish deals and offers ?')">
                                            <button class="delete__btn" style="width:100%;font-size:10pt;text-align:center;padding:8px;">UnPublish</button></a>
        
                                        @endif
                                        <form method="post" class="" action="{{url('/destroy-deals/'.$deal->id)}}">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{url('/destroy-deals/'.$deal->id)}}" onclick="return confirm('Are you sure you want to Delete deal ?')">
                                                <button class="delete__btn" style="width:100%;font-size:10pt;text-align:center;padding:8px;">Delete</button></a>
                                        </form>
                                        </div>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table> 
                        
                        
                
                        <div class="deals__page--index">
                        
                            {{$allDeals->links()}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- <button class="submit__button" type="submit">Return to Main Site</button> -->

        </div>

    </div>

    <script>

        document.getElementById('buttonid').addEventListener('click', openDialog);
        
        function openDialog(e) {
            e.preventDefault()
          document.getElementById('fileid').click();
        }
    </script>

    <script src="assets/scripts/admin.js"></script>



</body>





</html>