<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\BusinessMean;

class BusinessMeansController extends Controller
{
    public function index(Request $request)
    {

        if(request()->has('order')) {

            if ($request->order == 'latest') {
                $item = BusinessMean::select('*')->orderByDesc('created_at')
                    ->with('medias')
                    ->paginate(3)->appends('order', $request->order);
                    dd($item);
                    return redirect()->back()->with('item',$item);
                //return view('business-means.search', compact('item'));

            }
        }
    }

    public function detail(Request $request, $id) {
        $item = BusinessMean::where('id',$id)->with('medias')->first();
        // dd($results);
        return view('pages.product-detail', compact('item'));
    }
    public function search(Request $request) {
        $business_mean_title=   "";
        $city_id            =   "";
        $category_id        =   "";
        if ($request->name) {
            $business_mean_title = $request->name;
        }

        if ($request->city) {
            $city_id = $request->city;
        }

        if ($request->category) {
            $category_id = $request->category;
        }


        DB::connection()->enableQueryLog();

        $results = BusinessMean::where('status', 1)
                ->where(function($query) use($business_mean_title, $city_id, $category_id) {
                    if (!empty($business_mean_title)) {
                        $query->where('name', 'like', '%' . $business_mean_title . '%');
                    }
                    if (!empty($city_id)) {
                        $query->where('city_id', 'like', $city_id . '%');
                    }
                    if (!empty($category_id)) {
                        $query->where('business_mean_category_id', 'like', $category_id . '%');
                    }
                    return $query;
                })->get();
        //return DB::getQueryLog();

        $queries = DB::getQueryLog($results);

        return view('business-means.search', compact('results'));

    }

}
