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
