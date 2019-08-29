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
                        </ul>
                        <!--end categories-list-->
                    </div>
                    <!--end container-->
                </section>
                <!--end block-->
                <!--============ End Categories =========================================================================-->
                @if($featured_prod->count())
                <!--============ Featured Ads ===========================================================================-->
                <section class="block">
                    <div class="container">
                        <h2>Featured Ads</h2>
                        <div class="items grid grid-xl-3-items grid-lg-3-items grid-md-2-items">
                            @if(count($b_m_categories->business_means_cat))
                                @foreach($b_m_categories->business_means_cat as $products_list_item)
                                    @foreach($products_list_item->featured_product_list as $item)
                                        @include('partials._product_item')
                                    @endforeach
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="background" data-background-color="#fff"></div>
                    <!--end background-->
                </section>
                <!--============ End Featured Ads =======================================================================-->
                @endif
                <!--end block-->
                <!--============ End Features Steps =====================================================================-->
                <!--============ Recent Ads =============================================================================-->
                <section class="block">
                    <div class="container">
                        <h2>Recent Ads</h2>
                        <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">

                            @if(count($b_m_categories->business_means_cat))
                                @foreach($b_m_categories->business_means_cat as $products_list_item)
                                @foreach($products_list_item->product_list as $item)
                                    @include('partials._product_item')
                                @endforeach
                                @endforeach
                            @endif

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

