


<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Login - April Travels
    </title>
    <link rel="icon" href="assets/images/favlogo.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/styles/admin.css" />
    <link rel="stylesheet" href="../../assets/fonts/AvenirLTStd-Black.otf">
    <script src="../assets/scripts/admin.js"></script>
</head>

<body>

    <div class="page">
        <div class="main-body login">

            <div class="main-body__content login" >

                    <div class="contact login" >
                        <div style="display: flex; align-items: center; justify-content: space-between; padding: 20px 40px;">
                            <img src="assets/backendImages/logo.png" alt="">
                            <img src="assets/images/WHITE.png" alt="">
                        </div>
                        <form  method="POST" action="{{ route('login') }}" class="contact__form">
                            @csrf
                            <h1 style="text-align: center;">LOGIN PORTAL</h1>
                            <!-- <label for="email">Email</label><br> -->
                            {{-- <input type="text" id="email" placeholder="Email Address"><br> --}}
                            <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                            <!-- <label for="password">Password</label><br> -->
                            {{-- <input type="password" id="password" placeholder="Enter Password"><br> --}}
                            <input id="password" placeholder="Enter Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <button class="contact__btn orange-btn">LOGIN</button>
                                <!-- <a href="" style="text-decoration: none; color: white;">Register</a> -->
                                <a style="text-decoration: none; color: white;" href="{{route('password.request')}}">Forgot Password ?</a>
                            </div>

                        </form>
                        
                    </div>

            </div>

        
        </div>

    </div>



    <script src="assets/scripts/admin.js"></script>



</body>





</html>