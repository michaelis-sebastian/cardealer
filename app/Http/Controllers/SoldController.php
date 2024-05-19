<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sold;

class SoldController extends Controller
{
    /**
     * Display a listing of the sold items.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $solds = Sold::with('vehicle.model.brand')->get(); // Assuming Sold model has a relationship with Vehicle model
        return view('solds.index', compact('solds'));
    }
}
