@extends('layouts.app')

@section('content')
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
<!--                    <div class="row"> <img src="https://i.imgur.com/CXQmsmF.png" class="logo"> </div>-->
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="{{ asset('images/login_img.png') }}" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">{{ __('E-Mail Address') }}</h6>
                        </label> <input class="mb-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Enter a valid email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">{{ __('Password') }}</h6>
                        </label> <input class="@error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Enter password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="custom-control-input"> <label for="remember" class="custom-control-label text-sm">{{ __('Remember Me') }}</label> </div> <a href="{{ route('password.request') }}" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">{{ __('Login') }}</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a href="{{ route('register') }}" class="text-danger ">Register</a></small> </div>
                </div>
                </form>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
@endsection
