<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'email',
        'password',
        'address',
        'image',
        'status',
    ];

}
