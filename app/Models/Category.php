<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public function businessmeans()
    {
        return $this->belongsToMany('App\Models\BusinessMeanType')->withPivot('business_mean_categories')
    	->withTimestamps();
    }

    public function product_categories()
    {
        return $this->belongsToMany('App\Models\BusinessMeanType','business_mean_categories')->where('id',1);
    }
}
