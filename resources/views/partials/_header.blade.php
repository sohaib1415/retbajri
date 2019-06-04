
@if  ( Route::current()->uri == '/' )
        <header class="hero ">
@else
    <header class="hero">
@endif
            <div class="hero-wrapper">
                        <!--============ Secondary Navigation ===============================================================-->
                <div class="secondary-navigation">
                    <div class="container">
                        <ul class="left">
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i> +92 345 8561406
                                </span>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>  info@retbajri.com
                                </span>
                            </li>
                        </ul>
                        <!--end left-->
                        <ul class="right">
                            <li>
                                <a href="@if (Auth::check()) {{ route('user.ads') }} @else {{ route('login') }} @endif">
                                    <i class="fa fa-heart"></i>My Ads
                                </a>
                            </li>
                            <li>
                                @if (Auth::check())
                                <a class="" href="{{ route('logout') }}"><i class="fa fa-sign-out"></i>{{ __('Logout') }}</a>
                                @else
                                <a class="" href="{{ route('login') }}"><i class="fa fa-sign-in"></i>{{ __('Login') }}</a>
                                @endif
                            </li>
                            <li>
                                <a class="" href="{{ route('register') }}"><i class="fa fa-pencil-square-o"></i>{{ __('Register') }}</a>
                            </li>
                        </ul>
                        <!--end right-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Secondary Navigation ===========================================================-->
                <!--============ Main Navigation ====================================================================-->

            <div class="main-navigation">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png') }}" class="img-responsive">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <!--Main navigation list-->
                            <ul class="navbar-nav">
                                <li class="nav-item @if  ( Route::current()->uri == '/' ) active @endif">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a>

                                </li>
                                <li class="nav-item @if  ( Route::current()->uri == 'about-us' ) active @endif">
                                    <a class="nav-link" href="{{ url('/about-us') }}">About Us</a>
                                </li>
                                <li class="nav-item @if  ( Route::current()->uri == 'blogs' ) active @endif">
                                    <a class="nav-link" href="{{ url('/blogs') }}">Blog</a>
                                </li>
                                <li class="nav-item @if  ( Route::current()->uri == 'faqs' ) active @endif">
                                    <a class="nav-link" href="{{ url('/faqs') }}">Faq</a>
                                </li>
                                <li class="nav-item @if  ( Route::current()->uri == 'contact-us' ) active @endif">
                                    <a class="nav-link" href="{{ url('/contact-us') }}">Contact</a>
                                </li>
                                <li class="nav-item @if  ( Route::current()->uri == '/' ) active @endif">
                                    <a href="{{route('ads.create')}}" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
                                </li>
                            </ul>
                            <!--Main navigation list-->
                        </div>
                        <!--end navbar-collapse-->

                        <!--end navbar-collapse-->
                        @if  ( Route::current()->uri != '/' )
                        <!-- main-search-form-toggle -->
                            <a href="#collapseMainSearchForm" class="main-search-form-toggle" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseMainSearchForm">
                                <i class="fa fa-search"></i>
                                <i class="fa fa-close"></i>
                            </a>
                        @endif

                        </nav>
                    <!-- breadcrumb -->
                    @yield('breadcrumb')
                </div>
                <!--end container-->
            </div>
            @if  ( Route::current()->uri != '/' )
            <!--============ Hero Form ==========================================================================-->
                <div class="collapse" id="collapseMainSearchForm">
                    <form class="hero-form form">
                        <div class="container">
                            <!--Main Form-->
                            <div class="main-search-form">
                                <div class="form-row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="what" class="col-form-label">What?</label>
                                            <input name="keyword" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="input-location" class="col-form-label">Where?</label>
                                            <input name="location" type="text" class="form-control small" id="input-location" placeholder="Enter Location">
                                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="category" class="col-form-label">Category?</label>
                                            <select name="category" id="category" class="small" data-placeholder="Select Category">
                                                <option value="">Select Category</option>
                                                <option value="1">Computers</option>
                                                <option value="2">Real Estate</option>
                                                <option value="3">Cars & Motorcycles</option>
                                                <option value="4">Furniture</option>
                                                <option value="5">Pets & Animals</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-primary width-100 small">Search</button>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                <!--end form-row-->
                            </div>
                            <!--end main-search-form-->
                            <!--Alternative Form-->
                            <div class="alternative-search-form">
                                <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                                <div class="collapse" id="collapseAlternativeSearchForm">
                                    <div class="wrapper">
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                                <label>
                                                    <input type="checkbox" name="new">
                                                    New
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="used">
                                                    Used
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="with_photo">
                                                    With Photo
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="featured">
                                                    Featured
                                                </label>
                                            </div>
                                            <!--end col-xl-6-->
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                                            <span class="input-group-addon small">$</span>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                                            <span class="input-group-addon small">$</span>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <select name="distance" id="distance" class="small" data-placeholder="Distance" >
                                                                <option value="">Distance</option>
                                                                <option value="1">1km</option>
                                                                <option value="2">5km</option>
                                                                <option value="3">10km</option>
                                                                <option value="4">50km</option>
                                                                <option value="5">100km</option>
                                                            </select>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-3-->
                                                </div>
                                                <!--end form-row-->
                                            </div>
                                            <!--end col-xl-6-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end collapse-->
                            </div>
                            <!--end alternative-search-form-->
                        </div>
                        <!--end container-->
                    </form>
                    <!--end hero-form-->
                </div>
            <!--end collapse-->
            <!--============ End Hero Form ======================================================================-->
            @endif
            <!--============ Page Title =========================================================================-->
            <div class="page-title">
                @yield('pageTitle')
            </div>
            <!--============ End Page Title =====================================================================-->
            @if ( Route::current()->uri == '/' )
            <!--============ Hero Form ==========================================================================-->
            <form class="hero-form form">
                <div class="container">
                    <!--Main Form-->
                    <div class="main-search-form">
                        <div class="form-row">
                            <div class="col-md-9 col-sm-9">
                                <div class="form-group">
                                    <label for="what" class="col-form-label">What Are You Looking For?</label>
                                    <input name="keyword" type="text" class="form-control" id="what" placeholder="Enter Anything">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-3">
                                <button type="submit" class="btn btn-primary width-100">Search</button>
                            </div>
                            <!--end col-md-3-->
                        </div>
                        <!--end form-row-->
                    </div>
                    <!--end main-search-form-->
                    <!--Alternative Form-->
                    <div class="alternative-search-form">
                        <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                        <div class="collapse" id="collapseAlternativeSearchForm">
                            <div class="wrapper">
                                <div class="form-row">
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                        <label>
                                            <input type="checkbox" name="new">
                                            New
                                        </label>
                                        <label>
                                            <input type="checkbox" name="used">
                                            Used
                                        </label>
                                        <label>
                                            <input type="checkbox" name="with_photo">
                                            With Photo
                                        </label>
                                        <label>
                                            <input type="checkbox" name="featured">
                                            Featured
                                        </label>
                                    </div>
                                    <!--end col-xl-6-->
                                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-row">
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                                    <span class="input-group-addon small">$</span>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                                    <span class="input-group-addon small">$</span>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-4-->
                                            <div class="col-md-4 col-sm-4">
                                                <div class="form-group">
                                                    <select name="distance" id="distance" class="small" data-placeholder="Distance" >
                                                        <option value="">Distance</option>
                                                        <option value="1">1km</option>
                                                        <option value="2">5km</option>
                                                        <option value="3">10km</option>
                                                        <option value="4">50km</option>
                                                        <option value="5">100km</option>
                                                    </select>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-3-->
                                        </div>
                                        <!--end form-row-->
                                    </div>
                                    <!--end col-xl-6-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end wrapper-->
                        </div>
                        <!--end collapse-->
                    </div>
                    <!--end alternative-search-form-->
                </div>
                <!--end container-->
            </form>
            <!--============ End Hero Form ======================================================================-->
            @endif
            <div class="background">
                @if ( Route::current()->uri == '/' )
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="overflow:hidden; height:640px;">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('images/slider/01.jpg') }}" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('images/slider/02.jpg') }}" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('images/slider/03.jpg') }}" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <div class="content col-md-12">

                @endif
            </div>
        </div>
    </header>
