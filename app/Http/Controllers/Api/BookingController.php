<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $booking = Booking::create([
            'user_id' => 1,
            'hotel_id' => $request->hotel_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'total_price' => $request->total_price,
        ]);

        return response()->json([
            'message' => 'Booking created successfully',
            'booking' => $booking
        ]);
    }
}