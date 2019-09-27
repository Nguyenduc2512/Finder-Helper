<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'location_id',
        'category_id',
        'admin_id',
        'amount',
        'title',
        'price',
        'address',
        'detail',
        'status',
        'start_time',
        'end_time',
        'gender',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function applies()
    {
        return $this->belongsToMany(User::class, 'user_apply', 'post_id', 'user_id')
                    ->withPivot(['status', 'id', 'user_apply_status', 'owner_post_status']);
    }

    public function success()
    {
        return $this->hasMany(UserApply::class, 'post_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

     public function admin()
    {
        return $this->belongsTo('admins', 'admin_id', 'id');
    }

    public function location()
    {
        return $this->belongsTo('locations', 'location_id', 'id');
    }
}
