<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function user_country()
    {
        return $this->hasOne('App\Models\country','id');
    }
}
