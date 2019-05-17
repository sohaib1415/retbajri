<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessMeanCategory extends Model
{
    //
    protected $table = 'business_mean_categories';
/*
    public function categories()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
    public function business_means_types()
    {
        return $this->belongsTo('App\Models\BusinessMeanType','business_mean_type_id');
    }
    */
}
