<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index()
    {
        return Hotel::all();
    }

    public function show($id)
    {
        return Hotel::findOrFail($id);
    }

    public function search($city)
    {
        return Hotel::where('city', $city)->get();
    }

    public function recommend()
    {
        return Hotel::where('rating', '>=', 4)
            ->orderBy('price', 'asc')
            ->get();
    }
}