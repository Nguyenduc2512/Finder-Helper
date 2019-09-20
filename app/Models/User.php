<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Post;

class User extends Authenticatable
{

    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'phone',
        'date_of_birth',
        'identification_code',
        'coin',
        'gender',
        'rules',
        'status',
        'identification',
        'avatar',
        'identification_back',
        'provider',
        'provider_id'
    ];
    protected $hidden = [
        'password'
    ];

    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }

}
