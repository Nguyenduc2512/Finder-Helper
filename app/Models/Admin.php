<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
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
