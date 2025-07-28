{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sign In UMT</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- FAVICON --}}
    <link rel="icon" href={{ asset('img1/logo.png') }} type="image/x-icon">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        @media (max-width: 768px) {
            /* /* .img {
                margin-left: 1rem;/* Menghilangkan margin left pada tampilan HP */
            /* } */
            */
        }

        .password-container {
            position: relative;
            /* width: fit-content; */
        }

        .password-container input {
            padding-right: 160px;
            /* Adjust this value to make space for the icon */
        }

        .password-container i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

</head>


<body style="background-color: #65894B">
    <div class="container lg: p-3"
        style="background-color: #65894B; padding: 0px 12rem; margin:auto; padding-top: 5rem;">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">

            <div class="col-md-8" style="padding-top: 8rem;">
                {{-- <img src="{{ asset('img/logo.png') }}" class="img" alt="Logo UMT"
                    style="padding-bottom: 1rem; margin-left: 20.5rem; padding-top: 4rem;"> --}}

                <div class="card">

                    <div class="card-header" style=" font-family: Rasa, serif; text-align:center; font-weight:800">
                        {{ __('Login Agen Travel') }}</div>

                    <div class="card-body">

                        @if ($errors->has('login'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('login') }}</strong>
                            </div>
                        @endif

                        @if ($errors->has('kode_akses'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('kode_akses') }}</strong>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end"
                                    style="font-family: Poppins, sans-serif;">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email Address">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end"
                                    style="font-family: Poppins, sans-serif;">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    {{-- <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Masukkan Password">
                                        <i class="fa-solid fa-eye"></i> --}}
                                    <div class="password-container">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Password">
                                        <i class="fa-solid fa-eye-slash" id="togglePassword"></i>
                                    </div>


                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kode_akses" class="col-md-4 col-form-label text-md-end"
                                    style="font-family: Poppins, sans-serif;">{{ __('Kode Akses') }}</label>

                                <div class="col-md-6">
                                    <div class="password-container">
                                        <input id="kode_akses" type="text"
                                            class="form-control @error('kode_akses') is-invalid @enderror"
                                            name="kode_akses" required autocomplete="current-password"
                                            placeholder="Kode Akses">


                                    </div>

                                    @error('kode_akses')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row mb-0">

                                <div class="col-md-8 offset-md-4">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}"
                                            style="text-decoration: none;">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <br>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4 mt-4">
                                    <p>Don't Have Account? <a href="{{ route('register') }}"
                                            style="text-decoration: none;">Register Here</a></p>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function(e) {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
