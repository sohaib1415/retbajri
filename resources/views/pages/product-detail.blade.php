@extends('layouts.master')

@section('title', '| Blog Post Single')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ url('search?category='.$item->business_categories->categories_1->id) }}">{{  $item->business_categories->categories_1->name }}</a></li>
        <li class="breadcrumb-item active"><a href="#">{{  $item->name }}</a></li>
    </ol>
@endsection

@section('pageStylesheets')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
@endsection
@section('pageTitle')
    <div class="container clearfix">
        <div class="float-left float-xs-none">
            <h1>{{  $item->name }}
                <span class="tag">Offer</span>
            </h1>
            <h4 class="location">
                <a href="#">{!! $item->product_location['name'] !!}</a>
            </h4>
        </div>
        <div class="float-right float-xs-none price">
            <div class="number">PKR {!! $item->price !!}</div>
            {{-- <div class="id opacity-50">
                <strong>ID: </strong>3479
            </div> --}}
        </div>
    </div>
@endsection

@section('content')
<section class="block">
    <!--Gallery Carousel-->
    <section>
        {{-- {{ dd($item) }} --}}
        <div class="owl-carousel full-width-carousel">
                @if(count($item->medias))
                @php $i=1 @endphp
                @foreach($item->medias as $item_pic)

                <img src="{{ asset('assets/products/').'/'.$item->business_categories->categories_1->name.'/'.$item_pic['title'] }}" alt="" data-hash="{{ $i }}">
                @php $i++ @endphp
                @endforeach
            @endif
            {{-- <div class="item background-image"><img src="{{ asset('images/backgrounds/image-24.jpg')}}" alt="" data-hash="1"></div>
            <div class="item background-image"><img src="{{ asset('images/backgrounds/image-26.jpg')}}" alt="" data-hash="2"></div>
            <div class="item background-image"><img src="{{ asset('images/backgrounds/image-22.jpg')}}" alt="" data-hash="4"></div>
            <div class="item background-image"><img src="{{ asset('images/backgrounds/image-23.jpg')}}" alt="" data-hash="5"></div>
            <div class="item background-image"><img src="{{ asset('images/backgrounds/image-20.jpg')}}" alt="" data-hash="6"></div>
            <div class="item background-image"><img src="{{ asset('images/backgrounds/image-25.jpg')}}" alt="" data-hash="3"></div> --}}
        </div>
    </section>
    <!--end Gallery Carousel-->
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            <!--============ Listing Detail =============================================================-->
            <div class="col-md-8">
                <!--Description-->
                @if ($item->description)
                <section>
                    <h2>Description</h2>
                    <p>
                        {{  $item->description }}
                    </p>
                </section>
                @endif
                <!--end Description-->
                <!--Details-->
                <section>
                    <h2>Details</h2>
                    <dl class="columns-3">
                        <dt>Date Added</dt>
                        <dd>05.04.2017</dd>
                        <dt>Type</dt>
                        <dd>Offer</dd>
                        <dt>Status</dt>
                        <dd>Used</dd>
                        <dt>First Owner</dt>
                        <dd>Yes</dd>
                        <dt>Material</dt>
                        <dd>Wood, Leather</dd>
                        <dt>Color</dt>
                        <dd>White, Grey</dd>
                        <dt>Height</dt>
                        <dd>47cm</dd>
                        <dt>Width</dt>
                        <dd>203cm</dd>
                        <dt>Length</dt>
                        <dd>54cm</dd>
                    </dl>
                </section>
                <!--end Details-->
                <!--Location-->
                {{-- <section>
                    <h2>Location</h2>
                    <div class="map height-300px" id="map-small"></div>
                </section> --}}
                <!--end Location-->
                <!--Features-->
                <section>
                    <h2>Features</h2>
                    <ul class="features-checkboxes columns-3">
                        <li>Quality Wood</li>
                        <li>Brushed Alluminium Handles</li>
                        <li>Foam mattress</li>
                        <li>Detachable chaise section</li>
                        <li>3 fold pull out mechanism</li>
                    </ul>
                </section>
                <!--end Features-->

                <hr>

                {{-- <!--Similar Ads-->
                <section>
                    <h2>Similar Ads</h2>
                    <div class="items list compact">
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
                                        <img src="{{ asset('images/backgrounds/image-01.jpg')}}" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Manhattan, NY</a>
                                </h4>
                                <div class="price">$80</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>02.05.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Jane Doe
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
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
                                        <img src="{{ asset('images/backgrounds/image-02.jpg')}}" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Nashville, TN</a>
                                </h4>
                                <div class="price">$125</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>28.04.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Peter Browner
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
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
                                        <img src="{{ asset('images/backgrounds/image-03.jpg')}}" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Seattle, WA</a>
                                </h4>
                                <div class="price">$1,560</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>21.04.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Peak Agency
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Nam eget ullamcorper massa. Morbi fringilla lectus nec lorem tristique gravida</p>
                                </div>
                                <!--end description-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="center">
                            <a href="#" class="btn btn-primary text-caps btn-framed">Show All</a>
                        </div>
                    </div>
                    <!--end items.list.compact-->
                </section> --}}
                <!--end Similar Ads-->
            </div>
            <!--============ End Listing Detail =========================================================-->
            <!--============ Sidebar ====================================================================-->
            <div class="col-md-4">
                <aside class="sidebar">
                    <!--Author-->
                    <section>
                        <h2>Author</h2>
                        <div class="box">
                            <div class="author">
                                <div class="author-image">
                                    <div class="background-image">
                                            <img src="@if($item->product_user->profile_pic){{ asset('assets/users/'.$item->product_user->profile_pic->title) }} @endif " alt="">
                                        {{-- <img src="{{ asset('user/'.{{ $item->product_user['name'] }})}}" alt=""> --}}
                                    </div>
                                </div>
                                <!--end author-image-->
                                <div class="author-description">
                                    <h3>{{ $item->product_user['name'] }}</h3>
                                    <div class="rating" data-rating="4"></div>
                                    <a href="{{ url('user-profile', $item->product_user->id) }}" class="text-uppercase">Show My Listings
                                        <span class="appendix">(12)</span>
                                    </a>
                                </div>
                                <!--end author-description-->
                            </div>
                            <hr>
                            <dl>
                                {{-- <dt>Phone</dt> --}}
                                {{-- <dd>{{ $item->product_user->user_details['contact_no'] }}</dd> --}}
                                <dt>Email</dt>
                                <dd>{{ $item->product_user['email'] }}</dd>
                            </dl>
                            <!--end author-->
                            {{-- <form class="form email">
                                <div class="form-group">
                                    <label for="name" class="col-form-label">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="email" class="col-form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="message" class="col-form-label">Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Hi there! I am interested in your offer ID 53951. Please give me more details."></textarea>
                                </div>
                                <!--end form-group-->
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form> --}}
                        </div>
                        <!--end box-->
                    </section>
                    <!--End Author-->
                </aside>
            </div>
            <!--============ End Sidebar ================================================================-->
        </div>
    </div>
    <!--end container-->
</section>
    <!--end block-->
@endsection

@section('pageScript')

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.carousel').carousel()
    })
    </script>
@endsection
