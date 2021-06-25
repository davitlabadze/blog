<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->orderBy('id','desc');

    }
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id');
    }
}
