<nav class="nav flex-column side-nav">
    <a
        class="nav-link icon @if ( Route::current()->uri == 'my-profile' ) active @endif"
        href="{{ route('user.profile') }}"
    >
        <i class="fa fa-user"></i>My Profile
    </a>
    <a
        class="nav-link icon @if ( Route::current()->uri == 'my-ads' ) active @endif"
        href="{{ route('user.ads') }}"
    >
        <i class="fa fa-heart"></i>My Ads Listing
    </a>
    {{-- <a class="nav-link icon" href="bookmarks.html">
        <i class="fa fa-star"></i>Bookmarks
    </a> --}}
    <a
        class="nav-link icon
            @if (( Route::current()->uri == 'password/reset' ) || (Route::current()->uri == 'password/email')) active
            @endif"
        href="
            @if  ( Route::current()->uri == 'password/reset' ) {{ route('password.update') }}
            @else {{ route('password.request') }}
            @endif"
    >
        <i class="fa fa-recycle"></i>
            @if  ( Route::current()->uri == 'password/reset' ) Forgot Password
            @else Reset Password
            @endif
    </a>
</nav>
