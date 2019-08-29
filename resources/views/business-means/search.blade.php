@extends('layouts.master')

@section('title', '| Search Results')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Search Results</a></li>
    </ol>
@endsection

@section('pageTitle')
    <div class="container">
        <h1 class="">
            Search Results
        </h1>
    </div>
@endsection

@section('content')

<section class="block">
        <div class="container">
            <!--============ Section Title===================================================================-->
            <div class="section-title clearfix">
                <div class="float-left float-xs-none">
                    <label class="mr-3 align-text-bottom">Sort by: </label>
                    <form class="validate" role="form" id="order_filter" method="GET"  action="{{ route('businessmeans.index') }}">
                    <select  id="order" name="order" onchange="this.form.submit()" class="small width-200px" data-placeholder="Default Sorting" >
                        <option value="">Default Sorting</option>
                        <option value="latest">Newest First</option>
                        <option value="old">Oldest First</option>
                        <option value="low_price">Lowest Price First</option>
                        <option value="high_price">Highest Price First</option>
                    </select>
                    </form>
                </div>
                <div class="float-right d-xs-none thumbnail-toggle">
                    <a href="#" class="change-class active" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                        <i class="fa fa-th"></i>
                    </a>
                    <a href="#" class="change-class" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                        <i class="fa fa-th-list"></i>
                    </a>
                </div>
            </div>
            {{-- {{ $results }} --}}
            <!--============ Items ==========================================================================-->
            <div class="items grid grid-xl-4-items grid-lg-3-items grid-md-2-items">
                @if(count($results))
                    @foreach($results as $item)
                        @include('partials._product_item')
                    @endforeach
                @endif
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
                                <img src="assets/img/image-02.jpg" alt="">
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
                        <a href="{{route('product-detail', $item->id)}}" class="detail text-caps underline">Detail</a>
                    </div>
                </div>
                <!--end item-->



                <a href="submit.html" class="item call-to-action">
                    <div class="wrapper">
                        <div class="title">
                            <i class="fa fa-plus-square-o"></i>
                            Submit Your Ad
                        </div>
                    </div>
                </a>
                <!--end item-->


            </div>
            <!--============ End Items ======================================================================-->
            <div class="page-pagination">
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
            </div>
            <!--end page-pagination-->
        </div>
        <!--end container-->
    </section>
    <!--end block-->
@endsection

@section('pageScript')
<script type="text/javascript">

    onunload = function()
    {
        var foo = document.getElementById('order');
        self.name = 'fooidx' + foo.selectedIndex;

    }
    onload = function()
    {
        var idx, foo = document.getElementById('order');
        foo.selectedIndex = (idx = self.name.split('fooidx')) ?	idx[1] : 0;
    }
    if(self.name == 'fooidx1')
    {
        $('#aggregator_name').text( 'Displaying Latest Questions');
    }
    else if(self.name == 'fooidx2')
    {
        $('#aggregator_name').text( 'Displaying Oldest Questions');
    }
    else if(self.name == 'fooidx3')
    {
        $('#aggregator_name').text( 'Displaying Rising stars');
    }
    else if(self.name == 'fooidx4')
    {
        $('#aggregator_name').text( 'Displaying Most Popular Questions');
    }
    else {
        $('#aggregator_name').text( 'Displaying Latest Questions');
    }

</script>
@endsection
