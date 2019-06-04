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
                    <form class="sidebar-form form">
                        <div class="form-group">
                            <label for="what" class="col-form-label">What?</label>
                            <input name="keyword" type="text" class="form-control" id="what" placeholder="What are you looking for?">
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="input-location" class="col-form-label">Where?</label>
                            <input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                        </div>
                        <!--end form-group-->
                        <div class="form-group">
                            <label for="category" class="col-form-label">Category?</label>
                            <select name="category" id="category" data-placeholder="Select Category">
                                <option value="">Select Category</option>
                                <option value="1">Computers</option>
                                <option value="2">Real Estate</option>
                                <option value="3">Cars & Motorcycles</option>
                                <option value="4">Furniture</option>
                                <option value="5">Pets & Animals</option>
                            </select>
                        </div>
                        <!--end form-group-->
                        <button type="submit" class="btn btn-primary width-100">Search</button>

                        <!--Alternative Form-->
                        <div class="alternative-search-form">
                            <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                            <div class="collapse" id="collapseAlternativeSearchForm">
                                <div class="wrapper">
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
                                    <div class="form-group">
                                        <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                        <span class="input-group-addon small">$</span>
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                        <span class="input-group-addon small">$</span>
                                    </div>
                                    <!--end form-group-->
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
                                    <div class="form-group">
                                        <h4>Price Range</h4>
                                        <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="400" data-value-type="price" data-currency="$" data-currency-placement="before">
                                            <div class="values clearfix">
                                                <input class="value-min" name="value-min[]" readonly>
                                                <input class="value-max" name="value-max[]" readonly>
                                            </div>
                                            <div class="element"></div>
                                        </div>
                                        <!--end price-slider-->
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end collapse-->
                        </div>
                        <!--end alternative-search-form-->
                    </form>
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
