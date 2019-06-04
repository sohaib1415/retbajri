@extends('layouts.master')

@section('title', '| Forgot Password')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Forgot Password</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
            Forgot Password
        </h1>
    </div>
@endsection

@section('content')
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('partials._user_nav')
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="form clearfix" novalidate="novalidate">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
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
                            <button type="submit" class="btn btn-primary float-right">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
