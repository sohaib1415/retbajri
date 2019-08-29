<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BusinessMeanType;


class BusinessMeanCategory extends Model
{
    //
    protected $fillable = ['business_mean_type_id', 'category_id'];
    protected $table = 'business_mean_categories';

    public function categories_1()
    {
        return $this->hasOne('App\Models\Category','id');
    }
    public function product_categories_1()
    {
       // return $this->hasOne('App\Models\Category','id')->where('level',1);
        return $this->categories_1()->where('level','=', 1);
    }
    public function product_list()
    {
        return $this->hasMany('App\Models\BusinessMean')->where('is_featured',0);
    }
    public function featured_product_list()
    {
        return $this->hasMany('App\Models\BusinessMean')->where('is_featured',1);
    }
    public function business_means_parent_cat()
    {
        return $this->belongsTo(BusinessMeanType::class, 'business_mean_type_id');
    }

}
