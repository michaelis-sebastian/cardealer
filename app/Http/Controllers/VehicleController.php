<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;

class VehicleController extends Controller
{
    // public function index()
    // {
    //     $vehicles = Vehicle::with('model.brand')->get(); // Eager load the model and brand relationships
    //     return view('vehicles.index', compact('vehicles'));
    // }

    public function index(Request $request)
    {
        // Fetch query parameters
        $brandId = $request->query('brand_id');
        $minPrice = $request->query('min_price');
        $maxPrice = $request->query('max_price');
        $sortOrder = $request->query('sort_order', 'asc');

        // Build the query
        $query = Vehicle::query();

        if ($brandId) {
            $query->whereHas('model', function ($query) use ($brandId) {
                $query->where('brand_id', $brandId);
            });
        }

        if ($minPrice) {
            $query->where('price', '>=', $minPrice);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice);
        }

        // Apply sorting
        $query->orderBy('price', $sortOrder);

        $vehicles = $query->get();

        $brands = Brand::all(); // Fetch all brands for the filter dropdown

        return view('vehicles.index', compact('vehicles', 'brands', 'sortOrder'));
    }
}
