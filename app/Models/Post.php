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

    public function userAplly()
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
