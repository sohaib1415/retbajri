<footer class="footer">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <a href="#" class="brand">
                                <img src="{{ asset('images/logo.png') }}" class="img-responsive">
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet
                            fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                        </p>
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-3">
                        <h2>Navigation</h2>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{ url('/about-us') }}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/blogs') }}">Blog</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/faqs') }}">Faq</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/privacy-policies') }}">Privacy Policies</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/terms-of-use') }}">Terms of Use</a>
                                        </li>
                                        <li>
                                                <a href="{{route('ads.create')}}">Submit Ad</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">My Ads</a>
                                        </li>
                                        <li>
                                                <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        <li>
                                                <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-4">
                        <h2>Contact</h2>
                        <address>
                            <figure>
                                    Office # 1A, Lower Ground Floor, Plaza,<br> Islamabad
                            </figure>
                            <br>
                            <strong>Email:</strong> <a href="#">info@retbajri.com</a>
                            <br>
                            <strong>Cell: </strong> 03012423289
                            <br>
                            <br>
                            <a href="{{ url('/contact-us') }}" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                        </address>
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <div class="background">
                <div class="background-image original-size" style="background-image: url('{{ asset('images/backgrounds/footer-background-icons.jpg') }}');">
                    <img src="{{ asset('images/backgrounds/footer-background-icons.jpg') }}" alt="">
                </div>
                <!--end background-image-->
            </div>
            <!--end background-->
        </div>
    </footer>
