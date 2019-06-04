@extends('layouts.master')

@section('title', '| Contact')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Contact</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
            Contact
        </h1>
    </div>
@endsection

@section('content')
<section class="block">
    <div class="map height-500px" id="map-contact"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Get In Touch</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit
                    amet fermentum sem. Class aptent taciti sociosqu ad litora
                </p>
                <br>
                <figure class="with-icon">
                    <i class="fa fa-map-marker"></i>
                    <span>Office # 1A, Lower Ground Floor,<br /> Plaza, Islamabad </span>
                </figure>
                <br>
                <figure class="with-icon">
                    <i class="fa fa-phone"></i>
                    <span>+92-51-1234567</span>
                </figure>
                <figure class="with-icon">
                    <i class="fa fa-mobile"></i>
                    <a href="#">03012423289</a>
                </figure>
                <figure class="with-icon">
                    <i class="fa fa-envelope"></i>
                    <a href="#">info@retbajri.com</a>
                </figure>

            </div>
            <!--end col-md-4-->
            <div class="col-md-8">
                <h2>Contact Form</h2>
                <form class="form email">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="col-form-label required">Your Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="col-form-label required">Your Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                    <div class="form-group">
                        <label for="subject" class="col-form-label">Subject</label>
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <!--end form-group-->
                    <div class="form-group">
                        <label for="message" class="col-form-label required">Your Message</label>
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <!--end form-group-->
                    <button type="submit" class="btn btn-primary float-right">Send Message</button>
                </form>
                <!--end form-->
            </div>
            <!--end col-md-8 -->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection
