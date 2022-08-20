<?php

namespace App\Http\Controllers;

use App\Models\Part;

use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index(Request $request) {
        $items = Part::all();
        return view('part.index', ['items' => $items]);
    }
}

class PartController extends Controller
{
    
}
