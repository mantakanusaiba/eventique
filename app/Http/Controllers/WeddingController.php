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

    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        
        WeddingPackage::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'wedding_type' => $request->wedding_type,
            'image_url' => 'images/'.$imageName,
            
        ]);
    }
}


    public function show($id)
    {
        
        $package = WeddingPackage::find($id); 
        return view('wedding.show', compact('package'));
    }
}
