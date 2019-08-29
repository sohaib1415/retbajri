@extends('layouts.master')

@section('title', '| Faq')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Faq</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
            Faq
        </h1>
    </div>
@endsection

@section('content')
<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section>
                    <form class="form inputs-underline">
                        <h3>Search in Answers</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your search">
                        </div>
                        <!--end form-group-->
                    </form>
                </section>
                <section>
                    <div class="answer">
                        <div class="box">
                            <h3>How to reset Retbajri Account password?</h3>
                            <p>Go to setting open change password and write old password.
                            </p>
                        </div>
                        <figure>Was this answer helpful? <a href="#">Yes<i class="fa fa-thumbs-up"></i></a> <a href="#">No<i class="fa fa-thumbs-down"></i></a></figure>
                    </div>
                    <!--end answer-->
                    <div class="answer">
                        <div class="box">
                            <h3>Why my Ad is not live yet?</h3>
                            <p>Your ad is subjected to Admin approval before it goes live. Please wait for 5-10 minutes and if the problem exists, contact us at info@retbajri.com
                            </p>
                        </div>
                        <figure>Was this answer helpful? <a href="#">Yes<i class="fa fa-thumbs-up"></i></a> <a href="#">No<i class="fa fa-thumbs-down"></i></a></figure>
                    </div>
                    <!--end answer-->
                    <div class="answer">
                        <div class="box">
                            <h3>Why cannot I find all the images I posted along with my ad?</h3>
                            <p>It is important that the images posted are directly relevant to the ad(s) posted and conform to our terms of use at RetBajri. We are sorry for any inconvenience caused but images which fall in the under-listed category will be removed from ads posted:

                                <ul>
                                    <li>Images of  children</li>
                                    <li>Images  portraying nudity</li>
                                    <li>Watermarked  Images</li>
                                    <li>Images with  third party website address / URL</li>
                                  </ul>
                            </p>
                        </div>
                        <figure>Was this answer helpful? <a href="#">Yes<i class="fa fa-thumbs-up"></i></a> <a href="#">No<i class="fa fa-thumbs-down"></i></a></figure>
                    </div>
                    <!--end answer-->

                </section>
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
            <!--end col-md-9-->
            <div class="col-md-3">
                <!--============ Side Bar ===============================================================-->
                <aside class="sidebar">
                    <h2>Search Ads</h2>
                    <!--============ Side Bar Search Form ===============================================-->
                   @include('partials._side_search')
                    <!--============ End Side Bar Search Form ===========================================-->
                </aside>
                <!--============ End Side Bar ===========================================================-->
            </div>
            <!--end col-md-3-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end block-->
@endsection
