<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessMeanCategory extends Model
{
    //
    protected $fillable = ['business_mean_type_id', 'category_id'];
    protected $table = 'business_mean_categories';

    public function categories_1()
    {
        return $this->hasOne('App\Models\Category','id');
    }
   /* public function product_categories_1()
    {
        return $this->hasOne('App\Models\Category','id')->where('level',1);
    }*/
/*    public function business_means_types()
    {
        return $this->belongsTo('App\Models\BusinessMeanType','business_mean_type_id');
    }
    */
}
