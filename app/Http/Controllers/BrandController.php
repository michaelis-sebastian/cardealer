<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all(); // Fetch all brands from the database
        return view('brands.index', compact('brands'));
    }
}
