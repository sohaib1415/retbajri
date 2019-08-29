<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\BusinessMeanType;
use App\Models\BusinessMean;
use App\Models\BusinessMeanMedia;
use App\Models\BusinessMeanCategory;
use App\Models\Media;

use App\Models\UserDetail;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
   //     $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        if(auth()->user() || (!auth()->user()))
        $b_m_categories= BusinessMeanType::find(1)
        ->with('business_means_cat')
        ->with('business_means_cat.product_list')
        ->with('business_means_cat.featured_product_list')
        ->with('business_means_cat.product_list.product_user')
        ->with('business_means_cat.featured_product_list.product_user')
        ->first();
        //  dd($b_m_categories);
        $featured_prod= BusinessMeanType::find(1)
        ->with('business_means_cat')
        ->with('business_means_cat.featured_product_list')
        ->with('business_means_cat.featured_product_list.product_user')
        ->first();
        return view('welcome',compact('b_m_categories','b_m_maincategories','featured_prod'));
    }

    public function index()
    {
        return redirect()->route('user.profile');
        //return view('home');
    }

    public function emailSend(Request $request)
    {
        return view('pages.email');
    }

}
