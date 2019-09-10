<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $post = 'posts';
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
        return $this->belongsTo('users', 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('categories', 'category_id', 'id');
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
