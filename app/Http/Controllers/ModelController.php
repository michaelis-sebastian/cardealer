<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models; // Assuming your Model is named CarModel

class ModelController extends Controller
{
    public function index()
    {
        // $models = CarModel::with('brand')->get(); // Eager load the brand relationship
        $models = Models::all();
        return view('models.index', compact('models'));
    }
}
