<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'length',
        'width',
        'corners',
        'pipes',
        'profile',
        'chandeliers',
        'lights',
        'window_type',
        'window_length',
        'total_price',
    ];

    // связь с пользователем
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
