@extends('base/script_page')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
    <div class="container-content">
        <div class="sign-up-content">
            <form method="POST" action="{{ route('login')}}">
                @csrf

                <h2 class="form-title">Masuk Akun Imam Courses</h2>

                <label for="email">Email</label>
                <div class="form-textbox">
                    <input type="email" name="email" id="email" class="form-control @error('email') 
                        is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div><br>

                <label for="pass">Kata Sandi</label>
                <div class="form-textbox">
                    <input type="password" name="pass" id="password" class="form-control @error('password') 
                        is-invalid @enderror" required autocomplete="new-password"/> 

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div><br>

                <div class="form-textbox">
                    <input type="submit" name="submit" id="submit" class="submit" value="Masuks" />
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">Ingat saya ?</label>
                </div>

            </form>

            <p class="loginhere">
                Belum punya akun ?<a href="#" class="signuphere-link"> Daftar Sekarang</a>
            </p>
        </div>
    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection
