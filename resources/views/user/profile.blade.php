@extends('layouts.master')

@section('title', '| My Profile')
@php $logged_user  = auth()->user()->id; @endphp
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">@if (($logged_user) && ($logged_user == $user->id)) My @endif Profile</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
                @if (($logged_user) && ($logged_user == $user->id)) My @endif Profile
        </h1>
    </div>
@endsection

@section('content')

<section class="block">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-9">
                    <section class="my-0">
                        <div class="author big">
                            <div class="author-image">
                                <div class="background-image">
                                        <img src="@if($user->profile_pic){{ asset('assets/users/'.$user->profile_pic->title) }} @endif " alt="">
                                </div>
                            </div>
                            <!--end author-image-->
                            <div class="author-description">
                                <div class="section-title">
                                    <h2>
                                        {{ $user->name }}
                                        @if (($logged_user) && ($logged_user == $user->id))
                                            <a href="{{route('user.profile.edit', $user->id)}}" class="btn btn-primary btn-rounded btn-framed float-right small ">Edit Profile</a>
                                        @endif
                                    </h2>
                                    <h4 class="location">
                                        <a href="#">{{ $user->user_city->name }}, {{ $user->user_city->user_country->name }}</a>
                                       </h4>
                                    <figure>
                                        <div class="float-left">
                                            <div class="rating" data-rating="4"></div>
                                        </div>
                                        <div class="text-align-right social">
                                            <a href="{{ $user->fb_link }}">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                            <a href="{{ $user->twitter_link }}">
                                                <i class="fa fa-twitter-square"></i>
                                            </a>
                                            <a href="{{ $user->jnstagram_link }}">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                            <a href="{{ $user->skype_id }}">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                        </div>
                                    </figure>
                                </div>
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Email</figure>
                                            <aside><a href="#">{{ $user->email }}</a></aside>
                                        </li>
                                        <li>
                                            @if(count($user->user_details))
                                                <figure>Phone</figure>
                                                @foreach($user->user_details as $user_phone)
                                                    <aside>{{  $user_phone->contact_no }}</aside>
                                                @endforeach
                                            @else
                                                <aside></aside>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <p>
                                    {{ $user->bio }}
                                </p>
                            </div>
                            <!--end author-description-->
                        </div>
                        <!--end author-->
                    </section>

                    <hr>

                    <section>
                        <h2>@if (($logged_user) && ($logged_user == $user->id)) My @else User @endif Ads</h2>
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
                            <div class="float-right float-xs-none d-xs-none thumbnail-toggle">
                                <a href="#" class="change-class active" data-change-from-class="list compact" data-change-to-class="grid" data-parent-class="items">
                                    <i class="fa fa-th"></i>
                                </a>
                                <a href="#" class="change-class" data-change-from-class="grid" data-change-to-class="list compact" data-parent-class="items">
                                    <i class="fa fa-th-list"></i>
                                </a>
                            </div>
                        </div>
                        <!--============ Items ==========================================================================-->
                        <div class="read-more" data-read-more-link-more="Show More" data-read-more-link-less="Show Less">
                            <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                                @if(count($user->user_products))
                                    @foreach($user->user_products as $item)
                                        @include('partials._product_item')


                                    @endforeach
                                @endif
                                <!--end item-->
                            </div>
                            <!--============ End Items ==============================================================-->
                        </div>
                        <!--end read-more-->
                    </section>
                    @if (($logged_user) && ($logged_user != $user->id))
                    <section>
                        <h2>Write a Review</h2>
                        <form class="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="subject" class="col-form-label">Subject</label>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Did you like a deal?">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-8-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="rating" class="col-form-label">Rating</label>
                                        <select name="rating" id="rating" data-placeholder="Select Rating">
                                            <option value="">Select Rating</option>
                                            <option value="1" data-option-stars="1">Horrible</option>
                                            <option value="2" data-option-stars="2">Average</option>
                                            <option value="3" data-option-stars="3">Good</option>
                                            <option value="4" data-option-stars="4">Very Good</option>
                                            <option value="5" data-option-stars="5">Excellent</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="review" class="col-form-label">Your Review</label>
                                        <textarea name="review" id="review" class="form-control" rows="4" placeholder="Good seller, I am satisfied."></textarea>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-12-->
                            </div>
                            <!--end row-->
                        </form>
                        <!--end form-->
                    </section>
                    @endif
                    <section>
                        <h2>Reviews</h2>
                        <div class="comments">
                            <div class="comment">
                                <div class="author">
                                    <a href="#" class="author-image">
                                        <div class="background-image">
                                            <img src="{{ asset('img/author-09.jpg') }} " alt="">
                                        </div>
                                    </a>
                                    <div class="author-description">
                                        <h3>Positive experience!</h3>
                                        <div class="meta">
                                            <span class="rating" data-rating="4"></span>
                                            <span>02.05.2017</span>
                                            <h5><a href="#">Jane Doe</a></h5>
                                        </div>
                                        <!--end meta-->
                                        <p>
                                            Nam pulvinar tortor nec lacinia efficitur. Integer erat tortor, ultricies
                                            ut est vel, euismod imperdiet lacus. Aenean nec turpis condimentum, mollis
                                            mauris id, scelerisque quam.
                                        </p>
                                    </div>
                                    <!--end author-description-->
                                </div>
                                <!--end author-->
                            </div>
                            <!--end comment-->

                            <div class="comment">
                                <div class="author">
                                    <a href="#" class="author-image">
                                        <div class="background-image">
                                            <img src="{{ asset('img/author-05.jpg') }} " alt="">
                                        </div>
                                    </a>
                                    <div class="author-description">
                                        <h3>Perfect seller. I am satisfied.</h3>
                                        <div class="meta">
                                            <span class="rating" data-rating="5"></span>
                                            <span>02.05.2017</span>
                                            <h5><a href="#">John Doe</a></h5>
                                        </div>
                                        <!--end meta-->
                                        <p>
                                            Integer erat tortor, ultricies ut est vel, euismod imperdiet lacus.
                                            Aenean nec turpis condimentum, mollis mauris id, scelerisque quam.
                                        </p>
                                    </div>
                                    <!--end author-description-->
                                </div>
                                <!--end author-->
                            </div>
                            <!--end comment-->

                            <div class="comment">
                                <div class="author">
                                    <a href="#" class="author-image">
                                        <div class="background-image">
                                            <img src="{{ asset('img/author-04.jpg') }} " alt="">
                                        </div>
                                    </a>
                                    <div class="author-description">
                                        <h3>Quick dispatch and good communication</h3>
                                        <div class="meta">
                                            <span class="rating" data-rating="3"></span>
                                            <span>02.05.2017</span>
                                            <h5><a href="#">Susan Jefferson</a></h5>
                                        </div>
                                        <!--end meta-->
                                        <p>
                                            Cras luctus aliquet fringilla. In eu cursus nunc. Quisque dolor leo,
                                            vehicula a sem ut, aliquam pretium tellus. Morbi ut mi eleifend,
                                            sollicitudin nisl in, elementum nisi. Praesent sed libero euismod,
                                            pellentesque risus sit amet, faucibus lorem. Pellentesque bibendum
                                            libero sed tempor tristique.
                                        </p>
                                    </div>
                                    <!--end author-description-->
                                </div>
                                <!--end author-->
                            </div>
                            <!--end comment-->
                        </div>
                        <!--end comment-->
                        <div class="center">
                            <a href="#" class="btn btn-primary btn-rounded btn-framed">Load More</a>
                        </div>
                    </section>
                </div>
                <!--end col-md-9-->
                <div class="col-md-3">
                    <!--============ Side Bar ===============================================================-->
                    <aside class="sidebar">
                        <section>
                            <h2>Search Ads</h2>
                            <!--============ Side Bar Search Form ===========================================-->
                            @include('partials._side_search')
                            <!--============ End Side Bar Search Form =======================================-->
                        </section>
                    </aside>
                    <!--============ End Side Bar ===========================================================-->
                </div>
                <!--end col-md-3-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end block-->
@endsection

@section('pageScript')
    <script src="{{ asset('js/readmore.min.js') }}"></script>
@endsection
