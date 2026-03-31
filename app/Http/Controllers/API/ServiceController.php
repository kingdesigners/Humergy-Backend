<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $baseUrl = "https://lightyellow-monkey-184762.hostingersite.com/images/";

        $services = [
            [
                'id' => 1,
                'title' => 'Regular 87',
                'label' => 'Regular 87',
                'value' => 'regular_87',
                'status' => 1,
                'image' => $baseUrl . 'fuel_87.png',
                'description' => 'Reliable 87 Octane fuel for everyday driving.'
            ],
            [
                'id' => 2,
                'title' => 'Mid-grade 89',
                'label' => 'Mid-grade 89',
                'value' => 'mid_grade_89',
                'status' => 1,
                'image' => $baseUrl . 'fuel_89.png',
                'description' => 'Enhanced performance blend for modern engines.'
            ],
            [
                'id' => 3,
                'title' => 'Premium 93',
                'label' => 'Premium 93',
                'value' => 'premium_93',
                'status' => 1,
                'image' => $baseUrl . 'fuel_93.png',
                'description' => 'High-octane fuel for maximum engine protection.'
            ],
            [
                'id' => 4,
                'title' => 'Diesel',
                'label' => 'Diesel',
                'value' => 'diesel',
                'status' => 1,
                'image' => $baseUrl . 'fuel_diesel.png',
                'description' => 'Ultra-low sulfur diesel for heavy-duty power.'
            ],
        ];

        return response()->json(['data' => $services]);
    }
}
