<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessMean extends Model
{
    protected $table = 'business_means';
    protected $fillable = ['name', 'user_id', 'city_id','price','business_mean_category_id'];
}
