<div class="item">
        @if($item->is_featured)<div class="ribbon-featured">Featured</div>@endif
        {{-- <!--end ribbon-->{{ $item->business_categories->categories_1 }} --}}
        <div class="wrapper">
            <div class="image">
                <h3>
                    <a href="#" class="tag category">{{  $item->business_categories->categories_1->name }}</a>
                    <a href="{{route('product-detail', $item->id)}}" class="title">{{  $item->name }}</a>
                    <span class="tag">Offer</span>
                </h3>
                <a href="{{route('product-detail', $item->id)}}" class="image-wrapper background-image">
                    <img src="@if ($item->medias){{ asset('assets/products/').'/'.$item->business_categories->categories_1->name.'/'.$item->main_img()['title'] }}@endif" alt="">
                </a>
            </div>
            <!--end image-->
            <h4 class="location">
                <a href="#">{!! $item->product_location['name'] !!}</a>
            </h4>
            <div class="price">Rs {{  $item->price }}</div>
            <div class="meta">
                <figure>
                    <i class="fa fa-calendar-o"></i>{{  substr($item->created_at,10) }}
                </figure>
                <figure>
                    <a href="#">
                        <i class="fa fa-user"></i>{{ $item->product_user['name'] }}
                    </a>
                </figure>
            </div>
            <!--end meta-->
            <div class="description">
                <p>{{  $item->description }}</p>
            </div>
            <!--end description-->
            <a href="{{route('product-detail', $item->id)}}" class="detail text-caps underline">Detail</a>
        </div>
    </div>
