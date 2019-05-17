<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessMeanType extends Model
{
    protected $fillable = ['name', 'slug', 'status'];
    protected $table = 'business_mean_types';

    public function general_categories()
    {
        return $this->belongsToMany('App\Models\Category','business_mean_categories')->where('category_parent_id',0);
    }
    public function main_categories()
    {
        return $this->belongsToMany('App\Models\Category','business_mean_categories')->where('level',1);
    }
    public function sub_categories()
    {
        return $this->belongsToMany('App\Models\Category','business_mean_categories')->where('level',2);
    }
}

