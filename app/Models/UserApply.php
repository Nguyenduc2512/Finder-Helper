<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserApply extends Model
{
    protected $table = 'user_apply';
    protected $fillable = [
        'user_id',
        'post_id',
        'apply_time',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }


}
