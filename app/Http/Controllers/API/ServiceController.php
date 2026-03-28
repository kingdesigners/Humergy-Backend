<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            ['id' => 1, 'title' => 'Regular 87', 'value' => 'regular_87', 'status' => 1],
            ['id' => 2, 'title' => 'Mid-grade 89', 'value' => 'mid_grade_89', 'status' => 1],
            ['id' => 3, 'title' => 'Premium 93', 'value' => 'premium_93', 'status' => 1],
            ['id' => 4, 'title' => 'Diesel', 'value' => 'diesel', 'status' => 1],
        ];

        return response()->json(['data' => $services]);
    }
}
