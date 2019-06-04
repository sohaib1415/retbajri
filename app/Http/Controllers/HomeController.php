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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        $b_m_categories= BusinessMeanType::find(1)->first();
     //   $b_m_categories= BusinessMeanCategory::where('business_mean_type_id',1)
     //   ->with('categories_1')
     //   ->with('product_categories_1')
    //    ->get();

     /*   $b_m_maincategories = Category::has('product_categories_1')->with(['product_categories_1' => function($query){
            $query->where('leval',1); //you may use any condition here or manual select operation
            $query->select(); //select operation
        }])
        ->get();

        $user = App\Models\Category::find(1)->product_categories;
        dd($user);
        */
        return view('welcome',compact('b_m_categories','b_m_maincategories'));
    }

    public function index()
    {
        return view('home');
    }
    public function profile()
    {
        $user               = auth()->user();
        if(auth()->user())
            $user_details       = UserDetail::where('user_id',$user->id)->first();
        else
            $user_details       = "";
        return view('user\profile',compact('user','user_details'));
    }
    public function ads()
    {
        $user               = auth()->user();
        if(auth()->user())
            $user_details       = UserDetail::where('user_id',$user->id)->first();
        else
            $user_details       = "";
        return view('user\ads',compact('user','user_details'));
    }
}
