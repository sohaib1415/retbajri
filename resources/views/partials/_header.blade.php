
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
                    @include('partials._nav')
                    <!-- breadcrumb -->
                    @yield('breadcrumb')
                </div>
                <!--end container-->
            </div>
            @if  ( Route::current()->uri != '/' )
            <!--============ Hero Form ==========================================================================-->
                <div class="collapse" id="collapseMainSearchForm">
                    @include('partials._search')
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
                @include('partials._search')
            <!--============ End Hero Form ======================================================================-->
            @endif
            <div class="background">
                @if ( Route::current()->uri == '/' )
                    @include('partials._slider')
                @endif
            </div>
        </div>
    </header>
