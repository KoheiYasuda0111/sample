<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body',
    ];

    public function post()
    {//App\Post
        return $this->belongsTo('App\Models\Post');
    }
    use HasFactory;
}
