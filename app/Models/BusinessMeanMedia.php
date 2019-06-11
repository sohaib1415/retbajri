<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessMeanMedia extends Model
{
    protected $fillable = ['media_id','business_mean_id','mediable_id','mediable_type'];
}
