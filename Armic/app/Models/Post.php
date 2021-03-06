<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = [
        'userID', 'title', 'URL', 'profile'
    ];

    /* 追伸 */
    public $timestamps = false;
}
