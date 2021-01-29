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
</head>
<style>
.new__deal--form button {
    align-items: flex-end;
    margin: 50px 0px;
    padding: 16px 54px;
    background: #2BB673;
    border-radius: 30px;
    border: none;
    font-family: Avenir LT Std;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 29px;
    color: #FFFFFF;
    position: absolute;
    /*top: 0px;*/
    right: calc(110px);
    /*top: calc(130vh);*/
}



#buttonid{
      /*top: calc(130vh);*/
}

.deals__container.new div button {
    background: #FF5E16;
    border-radius: 30px;
    /* padding: 20px 65px; */
    padding: 19px 5px;
    border: none;
    font-family: Avenir LT Std;
    font-style: normal;
    font-weight: normal;
    font-size: 24px;
    line-height: 29px;
    color: #FFFFFF;
    /*margin: -905px 0px;*/
    width:200px;
}
a:focus, a:hover {
        color: #FF5E16;
        text-decoration: none;
      }

</style>
<body>
        @include('sweet::alert')
    <div class="page">
        @include('includes.admin-header')
            <div class="deal__block--container">
                <h2>Deals</h2>
                <div class="deals__container new">
                    <div>
                        <img src="assets/backendImages/newyorkbig.png" alt="" width="514" height="317">
                        <span style="display: block; color:red; margin-top: 10px">
                            * Image Uploads will be resized to 514 x 317 
                        </span>
                        <div class="upload_file_container">
                            {{-- <button>Change Picture</button> --}}
                            {{-- <input type="file" name="photo" /> --}}
                        </div>
                    </div>
                    <form action="{{url('/create-deal/')}}" method="POST" enctype="multipart/form-data" class="new__deal--form">
                        @csrf
                      <div class="upload_file_container">
                            {{-- <button>Change Picture</button> --}}
                            {{-- <input type="file" name="deals_image" /> --}}
                            <input id='fileid' type='file' name="deals_image" hidden/>
                             <button id='buttonid' style="top: -60px; right: calc(166px);" >Upload Image</button>
                        </div>
                        <label for="title">Title</label>
                        @error('location'){{$message}}@enderror
                        <input type="text" name="location" placeholder="New York">
                        <label for="deals">Discount</label>
                        <input type="text" name="deals" placeholder="10">
                        <label for="deals">Amount</label>
                        <input type="text" name="amount" placeholder="100,000">
                        <label for="deals">Bookings</label>
                        <input type="text" name="bookings" placeholder="5">
                        <label for="description">Description</label>
                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                        <button style="top: calc(124vh);">Submit</button> 
                    </form>
                </div>
            </div>

            <!-- <button class="submit__button" type="submit">Return to Main Site</button> -->

        </div>

    </div>



    <script src="assets/scripts/admin.js"></script>

<script>

document.getElementById('buttonid').addEventListener('click', openDialog);

function openDialog(e) {
    e.preventDefault()
  document.getElementById('fileid').click();
}
</script>

</body>





</html>