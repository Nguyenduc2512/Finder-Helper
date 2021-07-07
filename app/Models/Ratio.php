<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ratio extends Model
{
    protected $table = 'ratios';
    protected $fillable = [
        'money',
        'coin',
    ];
}
