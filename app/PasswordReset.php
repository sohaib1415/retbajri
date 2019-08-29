<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    public $timestamps = false;
    //protected $primaryKey = 'token';
    protected $fillable = [
        'email', 'token', 'created_at'
    ];
}
