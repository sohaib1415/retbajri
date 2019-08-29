<form class="hero-form form" action="{!! route('search.page') !!}" method="GET">
    <div class="container">
        <!--Main Form-->
        <div class="main-search-form">
            <div class="form-row">
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label for="what" class="col-form-label">What?</label>
                        <input name="name" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label for="input-location" class="col-form-label">Where?</label>
                        {{ Form::select("city", get_cities(), null, ['class' => 'small selectized', 'placeholder' => 'Select Location']) }}
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <div class="form-group">
                        <label for="category" class="col-form-label">Category?</label>
                        {{ Form::select("category", get_all_categories(1), null, ['class' => 'small selectized', 'placeholder' => 'Select Category']) }}
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
