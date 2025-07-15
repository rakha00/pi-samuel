<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MidtransPendingTransaction extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'total_amount',
        'snap_token',
        'cart_items',
    ];

    protected $casts = [
        'cart_items' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
