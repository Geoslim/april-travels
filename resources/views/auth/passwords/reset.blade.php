<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Reset Password - April Travels
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
                            <img src="../../assets/backendImages/logo.png" alt="">
                            <img src="../../assets/images/WHITE.png" alt="">
                        </div>
                        <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <h1 style="text-align: center;"> Reset Password</h1>
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" style="padding:0;">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <button class="contact__btn orange-btn">{{ __('Reset Password') }}</button>
                                <a style="text-decoration: none; color: white;" href="{{route('login')}}">Return to Login</a>
                            </div>

                        </form>
                        
                    </div>

            </div>

        
        </div>

    </div>



    <script src="assets/scripts/admin.js"></script>



</body>

</html>

