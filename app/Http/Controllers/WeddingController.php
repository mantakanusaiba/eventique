<?php

namespace App\Http\Controllers;

use App\Models\WeddingPackage;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index(Request $request)
    {
        $query = WeddingPackage::query(); 
        
        
        if ($request->has('wedding_type') && $request->wedding_type != '') {
            $query->where('wedding_type', $request->wedding_type);
        }

        if ($request->has('photography')) {
            $query->where('photography', true);
        }

        if ($request->has('wedding_cake')) {
            $query->where('wedding_cake', true);
        }

        if ($request->has('extra_decorations')) {
            $query->where('extra_decorations', true);
        }

        $packages = $query->get();  
        return view('wedding.index', ['packages' => $packages]);
    }
}