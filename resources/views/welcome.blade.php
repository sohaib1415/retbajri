@extends('layouts.master')

@section('title', '| Home')
@section('pageStylesheets')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
@endsection
@section('pageTitle')
    <div class="container">
        <h1 class="opacity-60 center">
            <a href="#">Buy</a>, <a href="#">Sell</a> or <a href="#">Find</a> What You need
        </h1>
    </div>
@endsection
@section('content')

                <!--============ Categories =============================================================================-->
                <section class="block">
                    <div class="container">
                        <h2>Popular Categories</h2>
                        <ul class="categories-list clearfix">
                                @foreach ($b_m_categories->product_general_categories as $data)
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-furniture-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">{{ $data->name }}</a></h3>
                                <div class="sub-categories">
                                    {{-- <a href="#">{{ $data->product_general_categories->name }}</a> --}}
                                    {{-- <a href="#">Sofas</a>
                                    <a href="#">Garden</a> --}}
                                </div>
                            </li>
                            @endforeach
                            <!--end category item-->
                            {{-- <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-pets-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Pets</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Dogs</a>
                                    <a href="#">Cats</a>
                                    <a href="#">Exotic</a>
                                </div>
                            </li>
                            <!--end category item-->
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-real-estate-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Real Estate</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Houses</a>
                                    <a href="#">Apartments</a>
                                </div>
                            </li>
                            <!--end category item-->
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-jobs-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Jobs</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Find Job</a>
                                    <a href="#">Offer Job</a>
                                </div>
                            </li>
                            <!--end category item-->

                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-cars-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Car</a></h3>
                                <div class="sub-categories">
                                    <a href="#">New</a>
                                    <a href="#">Used</a>
                                    <a href="#">Rent</a>
                                </div>
                            </li>
                            <!--end category item-->
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-mobile-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Mobile</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Apple</a>
                                    <a href="#">Samsung</a>
                                </div>
                            </li>
                            <!--end category item-->
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-cameras-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Cameras</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Photo</a>
                                    <a href="#">Video</a>
                                    <a href="#">Lenses</a>
                                </div>
                            </li>
                            <!--end category item-->
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-sport-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Sport</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Ski</a>
                                    <a href="#">Bike</a>
                                    <a href="#">Hockey</a>
                                </div>
                            </li>
                            <!--end category item-->

                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-electro-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Electro</a></h3>
                                <div class="sub-categories">
                                    <a href="#">TV</a>
                                    <a href="#">Radio</a>
                                    <a href="#">PC</a>
                                </div>
                            </li>
                            <!--end category item-->
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-clothing-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Clothing</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Shirts</a>
                                    <a href="#">Trousers</a>
                                </div>
                            </li>
                            <!--end category item-->
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-books-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Books</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Fantasy</a>
                                    <a href="#">History</a>
                                    <a href="#">Sci-Fi</a>
                                </div>
                            </li>
                            <!--end category item-->
                            <li>
                                <i class="category-icon">
                                    <img src="{{ asset('icons/category-music-b.png') }}" alt="">
                                </i>
                                <h3><a href="#">Music</a></h3>
                                <div class="sub-categories">
                                    <a href="#">Rock</a>
                                    <a href="#">Techno</a>
                                    <a href="#">Folk</a>
                                </div>
                            </li> --}}
                            <!--end category item-->
                        </ul>
                        <!--end categories-list-->
                    </div>
                    <!--end container-->
                </section>
                <!--end block-->
                <!--============ End Categories =========================================================================-->
                <!--============ Featured Ads ===========================================================================-->
                <section class="block">
                    <div class="container">
                        <h2>Featured Ads</h2>
                        <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                            <div class="item">
                                <div class="wrapper">
                                    <div class="image">
                                        <h3>
                                            <a href="#" class="tag category">Home & Decor</a>
                                            <a href="single-listing-1.html" class="title">Furniture for sale</a>
                                            <span class="tag">Offer</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-01.jpg') }}" alt="">
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
                                    <a href="{{route('product-detail')}}" class="detail text-caps underline">Detail</a>
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
                                            <img src="{{ asset('img/image-02.jpg') }}" alt="">
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
                                            <img src="{{ asset('img/image-03.jpg') }}" alt="">
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

                        </div>
                    </div>
                    <div class="background" data-background-color="#fff"></div>
                    <!--end background-->
                </section>
                <!--============ End Featured Ads =======================================================================-->

                <!--end block-->
                <!--============ End Features Steps =====================================================================-->
                <!--============ Recent Ads =============================================================================-->
                <section class="block">
                    <div class="container">
                        <h2>Recent Ads</h2>
                        <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
                            <div class="item">
                                <div class="wrapper">
                                    <div class="image">
                                        <h3>
                                            <a href="#" class="tag category">Real Estate</a>
                                            <a href="single-listing-1.html" class="title">Luxury Apartment</a>
                                            <span class="tag">Offer</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-04.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location">
                                        <a href="#">Greeley, CO</a>
                                    </h4>
                                    <div class="price">$75,000</div>
                                    <div class="meta">
                                        <figure>
                                            <i class="fa fa-calendar-o"></i>13.03.2017
                                        </figure>
                                        <figure>
                                            <a href="#">
                                                <i class="fa fa-user"></i>Hills Estate
                                            </a>
                                        </figure>
                                    </div>
                                    <!--end meta-->
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

                            <div class="item">
                                <div class="wrapper">
                                    <div class="image">
                                        <h3>
                                            <a href="#" class="tag category">Architecture</a>
                                            <a href="single-listing-1.html" class="title">We'll Redesign Your Apartment</a>
                                            <span class="tag">Offer</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-05.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location">
                                        <a href="#">Greeley, CO</a>
                                    </h4>
                                    <div class="price">
                                        <span class="appendix">From</span>
                                        $200
                                    </div>
                                    <div class="meta">
                                        <figure>
                                            <i class="fa fa-calendar-o"></i>13.03.2017
                                        </figure>
                                        <figure>
                                            <a href="#">
                                                <i class="fa fa-user"></i>XL Designers
                                            </a>
                                        </figure>
                                    </div>
                                    <!--end meta-->
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
                                        </ul>
                                    </div>
                                    <!--end addition-info-->
                                    <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                </div>
                            </div>
                            <!--end item-->

                            <div class="item">
                                <div class="ribbon-featured">Featured</div>
                                <!--end ribbon-->
                                <div class="wrapper">
                                    <div class="image">
                                        <h3>
                                            <a href="#" class="tag category">Jobs</a>
                                            <a href="single-listing-1.html" class="title">Seeking for a Job</a>
                                            <span class="tag">Demand</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-06.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location">
                                        <a href="#">Delavan, IL</a>
                                    </h4>
                                    <div class="price">$1,200</div>
                                    <div class="meta">
                                        <figure>
                                            <i class="fa fa-calendar-o"></i>10.03.2017
                                        </figure>
                                        <figure>
                                            <a href="#">
                                                <i class="fa fa-user"></i>Aurelio Thomas
                                            </a>
                                        </figure>
                                    </div>
                                    <!--end meta-->
                                    <div class="description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <ul>
                                            <li>
                                                <figure>Degree</figure>
                                                <aside>Bachelor’s</aside>
                                            </li>
                                            <li>
                                                <figure>Category</figure>
                                                <aside>Art & Design</aside>
                                            </li>
                                            <li>
                                                <figure>Experience</figure>
                                                <aside>5 years</aside>
                                            </li>
                                            <li>
                                                <figure>Language</figure>
                                                <aside>English, German</aside>
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
                                            <a href="#" class="tag category">Pets & Animals</a>
                                            <a href="single-listing-1.html" class="title">Baby Cats</a>
                                            <span class="tag">Offer</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-07.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location">
                                        <a href="#">Detroit, MI</a>
                                    </h4>
                                    <div class="price">
                                        <span class="appendix">From</span>
                                        $80
                                    </div>
                                    <div class="meta">
                                        <figure>
                                            <i class="fa fa-calendar-o"></i>23.02.2017
                                        </figure>
                                        <figure>
                                            <a href="#">
                                                <i class="fa fa-user"></i>Detroit Pet Center
                                            </a>
                                        </figure>
                                    </div>
                                    <!--end meta-->
                                    <div class="description">
                                        <p>Pellentesque ullamcorper justo quis bibendum
                                            consequat. Integer id euismod lacus, facilisis faucibus urna.
                                        </p>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <ul>
                                            <li>
                                                <figure>Age</figure>
                                                <aside>2 weeks</aside>
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
                                            <a href="#" class="tag category">Mobiles</a>
                                            <a href="single-listing-1.html" class="title">Used Smartphone</a>
                                            <span class="tag">Offer</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-08.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location">
                                        <a href="#">West Roxbury, MA</a>
                                    </h4>
                                    <div class="price">$300</div>
                                    <div class="meta">
                                        <figure>
                                            <i class="fa fa-calendar-o"></i>28.02.2017
                                        </figure>
                                        <figure>
                                            <a href="#">
                                                <i class="fa fa-user"></i>Gloria A. Crawford
                                            </a>
                                        </figure>
                                    </div>
                                    <!--end meta-->
                                    <div class="description">
                                        <p>Vestibulum congue at justo semper dignissim. Pellentesque ullamcorper justo quis bibendum
                                            consequat. Integer id euismod lacus, facilisis faucibus urna.
                                        </p>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <ul>
                                            <li>
                                                <figure>Status</figure>
                                                <aside>Used</aside>
                                            </li>
                                            <li>
                                                <figure>Brand</figure>
                                                <aside>Samsung</aside>
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
                                            <a href="#" class="tag category">Cars</a>
                                            <a href="single-listing-1.html" class="title">Offroad Car</a>
                                            <span class="tag">Offer</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-09.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location">
                                        <a href="#">Nehalem, OR</a>
                                    </h4>
                                    <div class="price">$30,000</div>
                                    <div class="meta">
                                        <figure>
                                            <i class="fa fa-calendar-o"></i>14.01.2017
                                        </figure>
                                        <figure>
                                            <a href="#">
                                                <i class="fa fa-user"></i>Leonardo
                                            </a>
                                        </figure>
                                    </div>
                                    <!--end meta-->
                                    <div class="description">
                                        <p>Nam eget imperdiet massa. Cras dolor nulla, tristique eu nisl ut, venenatis volutpat massa.
                                            Integer imperdiet finibus ipsum vitae scelerisque.
                                        </p>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <ul>
                                            <li>
                                                <figure>Brand</figure>
                                                <aside>Jeep</aside>
                                            </li>
                                            <li>
                                                <figure>Engine</figure>
                                                <aside>Diesel</aside>
                                            </li>
                                            <li>
                                                <figure>Mileage</figure>
                                                <aside>28,630</aside>
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
                                            <a href="#" class="tag category">Clothing</a>
                                            <a href="single-listing-1.html" class="title">High Boots</a>
                                            <span class="tag">Offer</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-10.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location">
                                        <a href="#">Raleigh, NC</a>
                                    </h4>
                                    <div class="price">$67</div>
                                    <div class="meta">
                                        <figure>
                                            <i class="fa fa-calendar-o"></i>05.01.2017
                                        </figure>
                                        <figure>
                                            <a href="#">
                                                <i class="fa fa-user"></i>Bobby
                                            </a>
                                        </figure>
                                    </div>
                                    <!--end meta-->
                                    <div class="description">
                                        <p>Nam pulvinar mollis tortor, eu lobortis mauris luctus non. Integer lobortis sapien enim,
                                            ut imperdiet leo faucibus id. Fusce tincidunt nunc elit, at varius erat rutrum vitae.
                                        </p>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <ul>
                                            <li>
                                                <figure>Status</figure>
                                                <aside>Used</aside>
                                            </li>
                                            <li>
                                                <figure>Material</figure>
                                                <aside>Genuine Leather</aside>
                                            </li>
                                            <li>
                                                <figure>Size</figure>
                                                <aside>10</aside>
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
                                            <a href="#" class="tag category">Books & Magazines</a>
                                            <a href="single-listing-1.html" class="title">Will Buy "Behind the Sea" Book</a>
                                            <span class="tag">Demand</span>
                                        </h3>
                                        <a href="single-listing-1.html" class="image-wrapper background-image">
                                            <img src="{{ asset('img/image-11.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <!--end image-->
                                    <h4 class="location">
                                        <a href="#">Long Beach, CA</a>
                                    </h4>
                                    <div class="price">$30</div>
                                    <div class="meta">
                                        <figure>
                                            <i class="fa fa-calendar-o"></i>02.01.2017
                                        </figure>
                                        <figure>
                                            <a href="#">
                                                <i class="fa fa-user"></i>Patty McAlexander
                                            </a>
                                        </figure>
                                    </div>
                                    <!--end meta-->
                                    <div class="description">
                                        <p>Mauris nisi ligula, pulvinar eu commodo eu, semper id quam. In vitae purus bibendum,
                                            mattis ex nec, eleifend diam. Cras at vehicula metus. Sed elementum lectus ut aliquet vehicula.
                                        </p>
                                    </div>
                                    <!--end description-->
                                    <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                                </div>
                            </div>
                            <!--end item-->
                        </div>
                    </div>
                    <!--end container-->
                </section>
                <!--end block-->
                <!--============ End Recent Ads =========================================================================-->
                <!--============ Features Steps =========================================================================-->
                <section class="block has-dark-background">
                        <div class="container">
                            <div class="block">
                                <h2>Selling With Us Is Easy</h2>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="feature-box">
                                            <figure>
                                                <img src="{{ asset('icons/feature-user.png') }}" alt="">
                                                <span>1</span>
                                            </figure>
                                            <h3>Create an Account</h3>
                                            <p>Etiam molestie viverra dui vitae mattis. Ut velit est</p>
                                        </div>
                                        <!--end feature-box-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="feature-box">
                                            <figure>
                                                <img src="{{ asset('icons/feature-upload.png') }}" alt="">
                                                <span>2</span>
                                            </figure>
                                            <h3>Submit Your Ad</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        <!--end feature-box-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="feature-box">
                                            <figure>
                                                <img src="{{ asset('icons/feature-like.png') }}" alt="">
                                                <span>3</span>
                                            </figure>
                                            <h3>Make a Deal</h3>
                                            <p>Nunc ultrices eu urna quis cursus. Sed viverra ullamcorper</p>
                                        </div>
                                        <!--end feature-box-->
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-3">
                                        <div class="feature-box">
                                            <figure>
                                                <img src="{{ asset('icons/feature-wallet.png') }}" alt="">
                                                <span>4</span>
                                            </figure>
                                            <h3>Enjoy the Money!</h3>
                                            <p>Integer nisl ipsum, sodales sed scelerisque nec, aliquet sit</p>
                                        </div>
                                        <!--end feature-box-->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end block-->
                        </div>
                        <!--end container-->
                        <div class="background" data-background-color="#2b2b2b"></div>
                        <!--end background-->
                    </section>
                <section class="block">
                        <div class="container">
                                <h2>Sponsored Companies</h2>
                            <div class="d-flex align-items-center justify-content-around">
                                <a href="#">
                                    <img src="{{ asset('images/sponsors/sp_icon_1.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/sponsors/sp_icon_2.png') }}" alt="">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/sponsors/sp_icon_3.png') }}" alt="">
                                </a>
                            </div>
                        </div>

                    </section>


@endsection

@section('pageScript')

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.carousel').carousel()
    })
    </script>
@endsection

