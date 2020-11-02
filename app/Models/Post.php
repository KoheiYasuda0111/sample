<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //$fillable
    protected $fillable = [
        'title',
        'body',
    ];

    public function comments()
    {
        //App\Comment
        return $this->hasMany('App\Models\Comment');
    }
    use HasFactory;
}
