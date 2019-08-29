<form class="sidebar-form form" action="{!! route('search.page') !!}" method="GET">
    <div class="form-group">
        <label for="what" class="col-form-label">What?</label>
    <input name="name" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
    </div>
    <!--end form-group-->
    <div class="form-group">
        <label for="input-location" class="col-form-label">Where?</label>
        {{ Form::select("city", get_cities(), null, ['class' => 'small selectized', 'placeholder' => 'Select Location']) }}
    </div>
    <!--end form-group-->
    <div class="form-group">
        <label for="category" class="col-form-label">Category?</label>
        {{ Form::select("category", get_all_categories(1), null, ['class' => 'small selectized', 'placeholder' => 'Select Category']) }}
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
