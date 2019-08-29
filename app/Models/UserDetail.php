<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['contact_no', 'address'];
    protected $table = 'user_details';
}
