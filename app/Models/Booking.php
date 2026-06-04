<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'hotel_id',
        'check_in',
        'check_out',
        'total_price'
    ];
}