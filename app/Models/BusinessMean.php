<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessMean extends Model
{
    protected $table = 'business_means';
    protected $fillable = ['name', 'user_id', 'city_id','price','business_mean_category_id', 'description'];


    public function medias()
    {
        return $this->morphMany('App\Models\Media', 'mediable');
    }

    public function main_img()
    {
        return $this->medias()->select('title')->first();
    }

    public function business_categories()
    {
        return $this->belongsTo('App\Models\BusinessMeanCategory','business_mean_category_id');
    }

    public function product_user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function product_location()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

}

