<?php
use App\Models\City;
use App\Models\Category;
use App\Models\BusinessMeanType;
use App\Models\BusinessMeanCategory;


if (!function_exists('get_cities')) {
    function get_cities()
    {
        $lang = City::where('status',1)->pluck('name', 'id');
        $lang['other'] = 'Other';
        return $lang;
    }
}

if (!function_exists('get_all_categories')) {
    function get_all_categories($b_m_id)
    {
        $b_type = BusinessMeanType::where('id',$b_m_id)->first();
        //dd($b_type);
        //dd($b_type->main_categories->pluck('name','id'));
        return $b_type->general_categories->pluck('name','id');
    }
}
if (!function_exists('get_all_maincategories')) {
    function get_all_maincategories($b_m_id)
    {
        $b_type = BusinessMeanType::where('id',$b_m_id)->first();
        //dd($b_type);
        //dd($b_type->main_categories->pluck('name','id'));
        return $b_type->main_categories->pluck('name','id');
    }
}


if (!function_exists('get_all_subcategories')) {
    function get_all_subcategories($b_m_id)
    {
        $b_type = BusinessMeanType::where('id',$b_m_id)->first();
        //dd($b_type);
        //dd($b_type->sub_categories->pluck('name','id'));
        return $b_type->sub_categories->pluck('name','id');
    }
}

if (!function_exists('get_product_categories')) {
    function get_product_categories()
    {
        $b_type = BusinessMeanType::all();
        dd($b_type->product_general_categories);
        //$b_m_categories= BusinessMeanCategory::where('business_mean_type_id',1)->with('categories_1')->get();
        $b_m_categories= BusinessMeanCategory::all();
        dd($b_m_categories['category_id']);
        $categories= Category::where('status',1)->whereIn('id',$b_m_categories->category_id)->get();
        dd($categories);
    }
}
