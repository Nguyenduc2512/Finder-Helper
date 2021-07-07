<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $table = 'coins';
    protected $fillable = [
        'ratio_id',
        'user_id',
        'bank',
        'bank_id',
        'status',
        'money',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function ratio()
    {
        return $this->belongsTo(Ratio::class, 'ratio_id', 'id');
    }

    public function banks()
    {
        return $this->belongsTo(Bank::class, 'bank_id', 'id');
    }
}
