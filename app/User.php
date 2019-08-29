<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function user_city()
    {
        return $this->hasOne('App\Models\city','id');
    }
    public function user_details()
    {
        return $this->hasMany('App\Models\UserDetail');
    }
    public function user_products()
    {
        return $this->hasMany('App\Models\BusinessMean');
    }

    public function profile_pic()
    {
        return $this->morphOne('App\Models\Media', 'mediable');
    }
    public function medias()
    {
        return $this->morphMany('App\Models\Media', 'mediable');
    }
}
