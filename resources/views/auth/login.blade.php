<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <div class="container-sm mt-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-danger rounded-3 border col-xl-4">
                <div class="mb-2 text-center">
                    <img src="{{ Vite::asset('resources/images/Group 26.png')}}" alt="image">
                    <h4 class="fs-5 fw-bold">Welcome to Admin</h4>
                </div>
                <div class="form my-3">
                <hr>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="mb-2">{{ __('Email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="mb-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <hr>
                    <div class="row pt-2">
                        <button type="submit" class="btn btn-secondary btn-lg mt-3 ">
                            <i class="bi bi-box-arrow-right"></i> {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
