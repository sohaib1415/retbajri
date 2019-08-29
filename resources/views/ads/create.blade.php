@extends('layouts.master')

@section('title', '| Submit Ad')
@section('pageStylesheets')
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
@endsection
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">Submit Ad</a></li>
    </ol>
@endsection
@section('pageTitle')
    <div class="container">
        <h1 class="">
            Submit Ad
        </h1>
    </div>
@endsection
@section('content')
<section class="block">
        <div class="container">
        @if (Auth::check())
            <form class="form form-submi MultiFile-intercepted" method="POST" novalidate="novalidate" enctype="multipart/form-data" action="{{ route('ads.store') }}">
                {{ csrf_field() }}

                <section>
                    <h2>Basic Information</h2>
                    <div class="form-group" id="type">
                        <label for="type" class="required">Type</label>
                        <figure>
                            @foreach ($business_means_type as $type)
                            <input @if($type->id == 1) checked @endif value={!! $type->id !!} type="radio" name="data" class="b_m_type"> {!! $type->name !!}
                            {{-- <label class="framed ">
                                <div class="iradio checked">
                                    <input type="radio" name="type" value="1" required="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>

                            </label> --}}
                            @endforeach

                        </figure>
                    </div>

                </section>
                {{ Form::hidden('business_mean_count', $business_means_type->count()) }}
                @foreach ($business_means_type as $data)

                <div class="b_type{{ $data->id }}">
                    {{ Form::hidden('business_mean_type', $data->id) }}
                <section>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="title" class="col-form-label required">Title</label>
                                <input name="title_{{ $data->id }}" type="text" class="form-control" id="title" placeholder="Title" required="">
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-8-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="price" class="col-form-label required">Price</label>
                                <input name="price_{{ $data->id }}" type="text" class="form-control" id="price" required="">
                                <span class="input-group-addon">$</span>
                            </div>
                            <!--end form-group-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name" class="col-form-label required">Your Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="{{ $user->name }}" disabled>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email" class="col-form-label required">Your Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="{{ $user->email }}" disabled>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="phone" class="col-form-label required">Your Phone</label>
                                <input name="phone_{{ $data->id }}" type="text" class="form-control" id="phone" placeholder="">@if(($user_details) &&($user_details->contact_no)) {{ $user_details->contact_no }}@endif
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-4-->
                    </div>
                </section>
                <!--end basic information-->
                <section>

                        <h2>Product Categories</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="submit-category-selectized" class="col-form-label">Category</label>
                                {{ Form::select("category_$data->id", get_all_categories($data->id), null) }}
                            </div>
                            <!--end form-group-->
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="submit-category-selectized" class="col-form-label">Main Category</label>
                                {{ Form::select("maincategory_$data->id", get_all_maincategories($data->id), null) }}
                            </div>
                            <!--end form-group-->
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="submit-category-selectized" class="col-form-label">Sub Category</label>
                                {{ Form::select("subcategory_$data->id", get_all_subcategories($data->id), null) }}
                            </div>
                            <!--end form-group-->
                        </div>

                    </div>
                    <!--end row-->
                </section>



                <section>
                    <h2>Details</h2>
                    <div class="form-group">
                        <label for="details" class="col-form-label">Additional Details</label>
                        <textarea name="description_{{ $data->id }}" id="details" class="form-control" rows="4"></textarea>
                    </div>
                    <!--end form-group-->
                </section>

                <section>
                    <h2>Location</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city-selectized" class="col-form-label required">City</label>
                                {{-- <select name="city" id="city" data-placeholder="Select City" required="" tabindex="-1" class="selectized" style="display: none;">
                                    {!! print_r(get_cities()) !!}
                                </select> --}}
                                {{ Form::select("city_$data->id", get_cities(), null) }}
                                <div class="selectize-control single"><div class="selectize-input items required full has-options has-items"><div class="item" data-value="">City</div><input type="text" autocomplete="off" tabindex="" id="city-selectized" style="width: 4px;"></div><div class="selectize-dropdown single" style="display: none; width: 350px; top: 55.2px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                            </div>
                            <!--end form-group-->
                        </div>
                        {{-- <div class="col-md-4">
                            <div class="form-group">
                                <label for="district-selectized" class="col-form-label required">District</label>
                                <select name="district" id="district" data-placeholder="Select District" required="" tabindex="-1" class="selectized" style="display: none;"><option value="" selected="selected">District</option></select><div class="selectize-control single"><div class="selectize-input items required full has-options has-items"><div class="item" data-value="">District</div><input type="text" autocomplete="off" tabindex="" id="district-selectized" style="width: 4px;"></div><div class="selectize-dropdown single" style="display: none; width: 350px; top: 55.2px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                            </div>
                            <!--end form-group-->
                        </div> --}}
                        <!--end col-md-6-->
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="address" class="col-form-label">Address</label>
                                <input name="address_{{ $data->id }}" type="text" class="form-control" id="street">@if(($user_details) &&($user_details->address)) {{ $user_details->address }}@endif
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->

                </section>

                <section>
                    <h2>Gallery</h2>
                    <div class="file-upload-previews"></div>
                    <div class="file-upload">
                        <div class="MultiFile-wrap" id="MultiFile">
                            <input type="file" name="files_{{ $data->id }}[]" class="file-upload-input with-preview MultiFile-applie" multiple="" title="Click to add files" maxlength="10" accept="gif|jpg|png" id="MultiFile" value=""></div>
                            <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                        </div>
                    </div>
                </section>

                <section class="clearfix">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary large icon float-right">Preview<i class="fa fa-chevron-right"></i></button>
                    </div>
                </section>
                </div>
                @endforeach
            </form>
        @else
            <section>
                <div class="alert alert-warning" role="alert">
                    <h2 class="alert-heading">You don't have an account!</h2>
                    <p>You can submit only 1 ad at a time. To submit more, you need to
                        <a href="{{route('login')}}" class="link"><strong>Sign In</strong></a> or
                        <a href="{{route('register')}}" class="link"><strong>Register</strong></a></p>
                </div>
            </section>
        @endif
    </div>
</div>
    @endsection
    @section('pageScript')
    <script src="{{ asset('js/jquery-validate.bootstrap-tooltip.min.js') }}"></script>
    <script src="{{ asset('js/jQuery.MultiFile.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var count = $("input[name=business_mean_count]").val();
      //  for(var c=1; c < count; c++)
      //  {
            if( $("input[type=file].with-preview").length ){
            $("input.file-upload-input").MultiFile({
                list: ".file-upload-previews"
            });
     //   }

    }
        $('.b_type2').css('display','none');
        $('.b_type1').css('display','block');
        $('.b_m_type').on('click',function(){
            //alert($(this).val());
            if($(this).val()== 1)
            {
                $('.b_type2').css('display','none');
                $('.b_type1').css('display','block');
            }
            else
            {
                $('.b_type1').css('display','none');
                $('.b_type2').css('display','block');
            }
        });
    });
</script>
@endsection
