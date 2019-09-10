<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $admin = 'admins';
    protected $fillable = [
        'name',
        'email',
        'avatar',
    ];
    protected  $hidden = [
        'password',
    ];
}
