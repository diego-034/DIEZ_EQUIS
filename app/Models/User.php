<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name','lastname', 'email', 'password',
    ];

    protected $hidden = [
        'password',
    ];
    
    protected $casts = [];
}