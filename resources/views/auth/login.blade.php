@extends('layouts.master')

@section('title', '| Login')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Login</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
            Login
        </h1>
    </div>
@endsection

@section('content')

<div class="block">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="POST" action="{{ route('login') }}" class="form clearfix">
                @csrf

                <div class="form-group">
                    <label for="email" class="col-form-label required">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="col-form-label required">{{ __('Password') }}</label>
                    <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-between align-items-baseline">
                    <label>
                        <input type="checkbox" name="remember"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                    </label>
                    <button type="submit" class="btn btn-primary"> {{ __('Login') }}</button>
                        {{-- {{ __('Forgot Your Password?') }} --}}
                </div>
            </form>
            <hr>
            <p>
                @if (Route::has('password.request'))
                Troubles with signing? <a href="{{ route('password.request') }}" class="link">Click here.</a>
                @endif
            </p>
        </div>
    </div>
</div>
@endsection
