<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = array('title', 'slug', 'file_type', 'filename', 'path');
}
