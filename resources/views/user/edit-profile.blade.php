@extends('layouts.master')

@section('title', '| Edit Profile')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('user.profile') }}">Profile</a></li>
        <li class="breadcrumb-item active"><a href="#">Edit Profile</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
            Edit Profile
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
                    <form class="form" action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-8">
                                <h2>Personal Information</h2>
                                <section>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title" class="col-form-label">Title</label>
                                                <select name="title" id="title" data-placeholder="Title">
                                                    <option value="">Title</option>
                                                    <option value="1" selected>Mrs</option>
                                                    <option value="2">Mr</option>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="name" class="col-form-label required">Your Name</label>
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" value="{{ $user->name }}" required>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-8-->
                                    </div>
                                    <!--end row-->
                                    <div class="form-group">
                                        <label for="location" class="col-form-label required">Your Location</label>
                                        {{ Form::select("city_id", get_cities(), null) }}
                                        {{-- <input name="location" type="text" class="form-control" id="input-location2" placeholder="Your Location" value="{{ $user->user_city->name }}, {{ $user->user_city->user_country->name }}" required> --}}
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="about" class="col-form-label">More About You</label>
                                        <textarea name="bio" id="about" class="form-control" rows="4">{{ $user->bio }}</textarea>
                                    </div>
                                    <!--end form-group-->
                                </section>

                                <section>
                                    <h2>Contact</h2>
                                    <div class="form-group">
                                        <label for="phone" class="col-form-label">Phone</label>
                                        @if(count($user->user_details))
                                            @foreach($user->user_details as $user_phone)
                                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone" value="{{  $user_phone->contact_no }}">
                                            @endforeach
                                        @else
                                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone" value="">
                                        @endif


                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Email</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="{{ $user->email }}" value="{{ $user->email }}">
                                    </div>
                                    <!--end form-group-->
                                </section>

                                <section>
                                    <h2>Social</h2>
                                    <div class="form-group">
                                        <label for="twitter" class="col-form-label">Twitter</label>
                                        <input name="twitter_link" type="text" class="form-control" id="twitter" placeholder="http://www.twitter.com/jane.doe" value="{{ $user->twitter_link }}">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="facebook" class="col-form-label">Facebook</label>
                                        <input name="fb_link" type="text" class="form-control" id="facebook" placeholder="http://www.facebook.com/jane.doe" value="{{ $user->fb_link }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram" class="col-form-label">Instagram</label>
                                        <input name="instagram_link" type="text" class="form-control" id="instagram" placeholder="http://www.instagram.com/jane.doe" value="{{ $user->instagram_link }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="skype" class="col-form-label">Skype</label>
                                        <input name="skype_id" type="text" class="form-control" id="skype" placeholder="skype_name" value="{{ $user->skype_id }}">
                                    </div>
                                    <!--end form-group-->
                                </section>

                                <section class="clearfix">
                                    <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                </section>
                            </div>
                            <!--end col-md-8-->
                            <div class="col-md-4">
                                <div class="profile-image">
                                    <div class="image background-image">
                                        <img src="assets/img/author-09.jpg" alt="">
                                    </div>
                                    <div class="single-file-input">
                                        <input type="file" id="user_image" name="user_image">
                                        <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                    </div>
                                </div>
                            </div>
                            <!--end col-md-3-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
