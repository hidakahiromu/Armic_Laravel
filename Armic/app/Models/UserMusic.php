<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMusic extends Model
{
    protected $primaryKey = 'userID';
    protected $fillable = [
        'artistName','artistFrigana'
    ];
}
