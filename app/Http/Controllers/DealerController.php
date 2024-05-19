<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dealer;

class DealerController extends Controller
{
    public function index()
    {
        $dealers = Dealer::all(); // Fetch all dealers
        return view('dealers.index', compact('dealers'));
    }
}
