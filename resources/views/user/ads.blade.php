@extends('layouts.master')

@section('title', '| My Ads')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">My Ads</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
            My Ads
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
                <!--============ Section Title===================================================================-->
                <div class="section-title clearfix">
                    <div class="float-left float-xs-none">
                        <label class="mr-3 align-text-bottom">Sort by: </label>
                        <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting" >
                            <option value="">Default Sorting</option>
                            <option value="1">Newest First</option>
                            <option value="2">Oldest First</option>
                            <option value="3">Lowest Price First</option>
                            <option value="4">Highest Price First</option>
                        </select>

                    </div>
                    <div class="float-right d-xs-none thumbnail-toggle">
                        <a href="#" class="change-class" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                            <i class="fa fa-th"></i>
                        </a>
                        <a href="#" class="change-class active" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                            <i class="fa fa-th-list"></i>
                        </a>
                    </div>
                </div>
                <!--============ Items ==========================================================================-->
                <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">
                    <div class="item">
                        <div class="ribbon-featured">Featured</div>
                        <!--end ribbon-->
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">Home & Decor</a>
                                    <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                    <span class="tag">Offer</span>
                                </h3>
                                <a href="single-listing-1.html" class="image-wrapper background-image">
                                    <img src="assets/img/image-01.jpg" alt="">
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">Manhattan, NY</a>
                            </h4>
                            <div class="price">$80</div>
                            <div class="admin-controls">
                                <a href="edit-ad.html">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="#" class="ad-hide">
                                    <i class="fa fa-eye-slash"></i>Hide
                                </a>
                                <a href="#" class="ad-remove">
                                    <i class="fa fa-trash"></i>Remove
                                </a>
                            </div>
                            <!--end admin-controls-->
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                            </div>
                            <!--end description-->
                            <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">Education</a>
                                    <a href="single-listing-1.html" class="title">Creative Course</a>
                                    <span class="tag">Offer</span>
                                </h3>
                                <a href="single-listing-1.html" class="image-wrapper background-image">
                                    <img src="assets/img/image-02.jpg" alt="">
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">Nashville, TN</a>
                            </h4>
                            <div class="price">$125</div>
                            <div class="admin-controls">
                                <a href="edit-ad.html">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="#" class="ad-hide">
                                    <i class="fa fa-eye-slash"></i>Hide
                                </a>
                                <a href="#" class="ad-remove">
                                    <i class="fa fa-trash"></i>Remove
                                </a>
                            </div>
                            <!--end admin-controls-->
                            <div class="description">
                                <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
                            </div>
                            <!--end description-->
                            <div class="additional-info">
                                <ul>
                                    <li>
                                        <figure>Start Date</figure>
                                        <aside>25.06.2017 09:00</aside>
                                    </li>
                                    <li>
                                        <figure>Length</figure>
                                        <aside>2 months</aside>
                                    </li>
                                    <li>
                                        <figure>Bedrooms</figure>
                                        <aside>3</aside>
                                    </li>
                                </ul>
                            </div>
                            <!--end addition-info-->
                            <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">Adventure</a>
                                    <a href="single-listing-1.html" class="title">Into The Wild</a>
                                    <span class="tag">Ad</span>
                                </h3>
                                <a href="single-listing-1.html" class="image-wrapper background-image">
                                    <img src="assets/img/image-03.jpg" alt="">
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">Seattle, WA</a>
                            </h4>
                            <div class="price">$1,560</div>
                            <div class="admin-controls">
                                <a href="edit-ad.html">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="#" class="ad-hide">
                                    <i class="fa fa-eye-slash"></i>Hide
                                </a>
                                <a href="#" class="ad-remove">
                                    <i class="fa fa-trash"></i>Remove
                                </a>
                            </div>
                            <!--end admin-controls-->
                            <div class="description">
                                <p>Nam eget ullamcorper massa. Morbi fringilla lectus nec lorem tristique gravida</p>
                            </div>
                            <!--end description-->
                            <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    <!--end item-->

                    <div class="item">
                        <div class="wrapper">
                            <div class="image">
                                <h3>
                                    <a href="#" class="tag category">Real Estate</a>
                                    <a href="single-listing-1.html" class="title">Luxury Apartment</a>
                                    <span class="tag">Offer</span>
                                </h3>
                                <a href="single-listing-1.html" class="image-wrapper background-image">
                                    <img src="assets/img/image-04.jpg" alt="">
                                </a>
                            </div>
                            <!--end image-->
                            <h4 class="location">
                                <a href="#">Greeley, CO</a>
                            </h4>
                            <div class="price">$75,000</div>
                            <div class="admin-controls">
                                <a href="edit-ad.html">
                                    <i class="fa fa-pencil"></i>Edit
                                </a>
                                <a href="#" class="ad-hide">
                                    <i class="fa fa-eye-slash"></i>Hide
                                </a>
                                <a href="#" class="remove">
                                    <i class="fa fa-trash"></i>Remove
                                </a>
                            </div>
                            <!--end admin-controls-->
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                            </div>
                            <!--end description-->
                            <div class="additional-info">
                                <ul>
                                    <li>
                                        <figure>Area</figure>
                                        <aside>368m<sup>2</sup></aside>
                                    </li>
                                    <li>
                                        <figure>Bathrooms</figure>
                                        <aside>2</aside>
                                    </li>
                                    <li>
                                        <figure>Bedrooms</figure>
                                        <aside>3</aside>
                                    </li>
                                    <li>
                                        <figure>Garage</figure>
                                        <aside>1</aside>
                                    </li>
                                </ul>
                            </div>
                            <!--end addition-info-->
                            <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                        </div>
                    </div>
                    <!--end item-->

                </div>
                <!--end items-->
            </div>
            <!--end col-md-9-->
        </div>
    </div>
</div>
@endsection
