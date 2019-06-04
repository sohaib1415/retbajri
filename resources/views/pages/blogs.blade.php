@extends('layouts.master')

@section('title', '| Blog')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Blog</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
            Blog
        </h1>
    </div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <article class="blog-post clearfix">
                    <a href="{{ url('blog-post') }}">
                        <img src="assets/img/blog-image-01.jpg" alt="">
                    </a>
                    <div class="article-title">
                        <h2><a href="{{ url('blog-post') }}">Cement Buying and Execution guidelines</a></h2>
                        <div class="tags framed">
                            <a href="#" class="tag">Home & Decor</a>
                            <a href="#" class="tag">Design</a>
                        </div>
                    </div>
                    <div class="meta">
                        <figure>
                            <a href="#" class="icon">
                                <i class="fa fa-user"></i>
                                John Doe
                            </a>
                        </figure>
                        <figure>
                            <i class="fa fa-calendar-o"></i>
                            02.05.2017
                        </figure>
                    </div>
                    <div class="blog-post-content">
                        <p>
                            Cement Buying and Execution guidelines What is Cement? It is binding material between different materials and acts like compulsory agent between aggregates and sand. It has capacity to set and make fragment materials to condensed mass when water is added in it. Its quantity and quality has direct relation with strength, as we increase...
                        </p>
                        <a href="{{ url('blog-post') }}" class="btn btn-primary btn-framed detail">Read more</a>
                    </div>
                </article>

                <!--end Articles-->

                {{-- <div class="page-pagination">
                    <nav aria-label="Pagination">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-chevron-left"></i>
                            </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="fa fa-chevron-right"></i>
                            </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
                <!--end page-pagination-->
            </div>
            <!--end col-md-8-->

            <div class="col-md-4">
                <!--============ Side Bar ===============================================================-->
                <aside class="sidebar">
                    <section>
                        <h2>Search Blog</h2>
                        <!--============ Side Bar Search Form ===========================================-->
                        <form class="sidebar-form form">
                            <div class="form-group">
                                <label for="what" class="col-form-label">What?</label>
                                <input name="keyword" type="text" class="form-control" id="what" placeholder="Enter keyword and press enter">
                            </div>
                            <!--end form-group-->
                        </form>
                        <!--============ End Side Bar Search Form =======================================-->
                    </section>
                    {{-- <section>
                        <h2>Popular Posts</h2>
                        <div class="sidebar-post">
                            <a href="blog-post.html" class="background-image">
                                <img src="assets/img/blog-image-03.jpg">
                            </a>
                            <!--end background-image-->
                            <div class="description">
                                <h4>
                                    <a href="blog-post.html">How to build a cool swimming pool</a>
                                </h4>
                                <div class="meta">
                                    <a href="#">John Doe</a>
                                    <figure>02.05.2017</figure>
                                </div>
                                <!--end meta-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end sidebar-post-->

                        <div class="sidebar-post">
                            <a href="blog-post.html" class="background-image">
                                <img src="assets/img/blog-image-04.jpg">
                            </a>
                            <!--end background-image-->
                            <div class="description">
                                <h4>
                                    <a href="blog-post.html">Concrete decorations can be beautiful</a>
                                </h4>
                                <div class="meta">
                                    <a href="#">John Doe</a>
                                    <figure>02.05.2017</figure>
                                </div>
                                <!--end meta-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end sidebar-post-->

                        <div class="sidebar-post">
                            <a href="blog-post.html" class="background-image">
                                <img src="assets/img/blog-image-05.jpg">
                            </a>
                            <!--end background-image-->
                            <div class="description">
                                <h4>
                                    <a href="blog-post.html">Let’s take a break</a>
                                </h4>
                                <div class="meta">
                                    <a href="#">John Doe</a>
                                    <figure>02.05.2017</figure>
                                </div>
                                <!--end meta-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end sidebar-post-->

                    </section>

                    <section>
                        <h2>Popular Post</h2>
                        <ul class="sidebar-list list-unstyled">
                            <li>
                                <a href="#">January 2017<span>4</span></a>
                            </li>
                            <li>
                                <a href="#">February 2017<span>12</span></a>
                            </li>
                            <li>
                                <a href="#">October 2016<span>8</span></a>
                            </li>
                            <li>
                                <a href="#">August 2016<span>3</span></a>
                            </li>
                            <li>
                                <a href="#">May 2016<span>11</span></a>
                            </li>
                        </ul>
                    </section> --}}
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
