<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'order_id',
        'name',
        'email',
        'amount',
        'message',
        'payment_status',
    ];

    public function getFormattedAmountAttribute()
    {
        return 'Rp ' . number_format($this->amount, 0, ',', '.');
    }

    public function getIsPaidAttribute()
    {
        return $this->payment_status === 'settlement';
    }
}
