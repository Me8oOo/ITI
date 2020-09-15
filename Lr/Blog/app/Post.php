<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'body', 'desc', 'enabled', 'published_at', 'user_id'
    ];
}
