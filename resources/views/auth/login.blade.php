<body>
    @yield('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-size: cover;

        }

        .loginForm {
            border-radius: 20px;
            left: 35%;
            background-color: rgb(0, 0, 0);
            position: absolute;
            width: 400px;
            padding: 50px 70px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
            /* box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px; */
            top: 20%;
        }

        .bacground-image img {
            width: 100%;
            height: 750px;
            background-size: cover;
        }

        .background-image-above {
            position: absolute;
            width: 100%;
            height: 750px;
            top: 0;
            opacity: 0.7;
            background-color: rgb(0, 0, 0);
        }

        .btnLogin {
            padding: 5px 30px;
            border: none;

            background-color: yellow;
        }

        .btnLogin:hover {
            background-color: wheat
        }

        .email-form {
            position: relative;
            background-color: white;
            height: auto;
        }

        .form-password {
            position: relative;
            background-color: white;
            height: auto;
        }

        .email-form input {
            width: 92%;
            border: none;
            border-radius: 20px
        }

        .form-password input {
            width: 92%;
            border: none;
            border-radius: 20px
        }

        input:focus {
            outline: none;
            /* Remove the default focus outline (optional) */
            border: none;
            /* Remove the border */
        }

        input {
            height: 35px;
            border-radius: 20px
        }
    </style>
    <div class="bacground-image">
        <img class="" src="{{ asset('image/background.jpg') }}" alt="Your Image">
    </div>
    <div class="background-image-above">

    </div>
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                  
                 

                </div>
            </div>
        </div>
    </div>
</div> --}}


    <div class="loginForm">
        <h1 class="text-center text-white">Login</h1>
        <hr class="text-warning">
        <form method="POST" action="{{ route('login') }}" class="mt-5">
            @csrf
            <div class="row mb-3">
                {{-- <label for="" class="text-white"><span class="text-danger">*</span>Email</label> --}}
                <div class="email-form">
                    <i class="fa-solid fa-envelope"></i>
                    <input id="email" type="email" @error('email') is-invalid @enderror name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email..">
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="text-danger">{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="row mb-3">
                {{-- <label for=""  class="text-white"><span class="text-danger">*</span>Password</label> --}}
                <div class="form-password">
                    <i class="fa-solid fa-lock"></i>
                    <input id="password" type="password" @error('password') is-invalid @enderror"
                        placeholder="Your password" name="password" required autocomplete="current-password">
                </div>

                @error('password')
                    <span class="invalid-feedback text-daner" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                @if (Route::has('password.request'))
                    <a class="btn btn-link" style="font-size: 12px; margin-left: -80px;"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif


            </div>

            <div class="row mb-3">
                <div class="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-white" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="">
                    <button type="submit" class="btnLogin">
                        {{ __('Login') }}
                    </button>

                </div>

                <span class="text-white mt-2" style="font-size: 10px;">Don't have acount? please <a
                        href="{{ route('register') }}" class="text-decoration-none">Register</a></span>
            </div>
        </form>
    </div>
</body>
