<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    // Minimal setup for admin panel, can be expanded if needed.
    public function index()
    {
        $services = Service::all();
        // Returning JSON or view depending on context
        return response()->json($services);
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());
        return response()->json($service);
    }
}
