@extends('layouts.master')
@section('title', '| About')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active"><a href="#">About Us</a></li>
    </ol>
@endsection
@section('pageTitle')
    <div class="container">
        <h1 class="">
            About Us
        </h1>
    </div>
@endsection
@section('content')
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 PageDetails">
                <img src="{{ asset('images/pages/page_about_us.png') }}" class="img-fluid"><br><br>
                <p><strong>RetBajri.com</strong> is the one stop solution for all your construction  material and service needs. Now search from millions of construction products  at your home. Whether you are planning to add beautiful tiles on your floor or  you are searching for reliable supplier of basic construction material, <strong>RetBajri</strong> will help you in finding right  material, from right supplier and at right market rate.<br>
                <strong>RetBajri.com</strong> is an effort to bring whole Pakistani  construction market in one place where industry can grow to make a healthy  competitive business environment. Our growth is driven by continuous  improvement in our services aimed to simplify your purchases while buying any  construction material or service from <strong>RetBajri</strong>.<br>
                <strong>Retbajri.com</strong> will not only provide the access to service  providers and material suppliers but it will also provide you with material  buying guidelines, execution guidelines, construction technology updates and  news. <br>
                <strong>RetBajri.com</strong> started its operations in 2018 with the vision to  provide innovative solutions that will ease your search for right quality construction  materials and professional services. Our motive is not just to search for you,  but be your companion in buying the best quality building materials and  professional services to build your dream home. <br>
                <strong>Build your dreams with RetBajri.com.</strong></p>
            </div>
		</div>
	</div>
</div>
@endsection
