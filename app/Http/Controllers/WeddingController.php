<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index(Request $request)
    {
       
        $packages = [
            [
                'id' => 1,
                'name' => 'Elegant Wedding',
                'price' => 1500,
                'description' => 'A beautiful wedding with elegant decorations.',
                'wedding_type' => 'luxury',
                'photography' => true,
                'wedding_cake' => true,
                'extra_decorations' => false,
            ],
            [
                'id' => 2,
                'name' => 'Luxury Wedding',
                'price' => 3000,
                'description' => 'A luxurious wedding experience with everything included.',
                'wedding_type' => 'luxury',
                'photography' => true,
                'wedding_cake' => true,
                'extra_decorations' => true,
            ],
            [
                'id' => 3,
                'name' => 'Classic Wedding',
                'price' => 2000,
                'description' => 'A timeless classic wedding with traditional elements.',
                'wedding_type' => 'classic',
                'photography' => true,
                'wedding_cake' => true,
                'extra_decorations' => false,
            ],
            [
                'id' => 4,
                'name' => 'Rustic Wedding',
                'price' => 1800,
                'description' => 'A rustic wedding with earthy elements and a natural feel.',
                'wedding_type' => 'rustic',
                'photography' => false,
                'wedding_cake' => true,
                'extra_decorations' => true,
            ],
        ];

        
        if ($request->has('wedding_type') && $request->wedding_type != '') {
            $packages = array_filter($packages, function ($package) use ($request) {
                return $package['wedding_type'] == $request->wedding_type;
            });
        }

       
        if ($request->has('photography')) {
            $packages = array_filter($packages, function ($package) use ($request) {
                return $package['photography'] == true;
            });
        }

        if ($request->has('wedding_cake')) {
            $packages = array_filter($packages, function ($package) use ($request) {
                return $package['wedding_cake'] == true;
            });
        }

        if ($request->has('extra_decorations')) {
            $packages = array_filter($packages, function ($package) use ($request) {
                return $package['extra_decorations'] == true;
            });
        }

       
        return view('wedding.index', ['packages' => $packages]);
    }

    public function show($id)
    {
        
        $package = [
            'id' => 1,
            'name' => 'Elegant Wedding',
            'price' => 1500,
            'description' => 'A beautiful wedding with elegant decorations. We offer luxurious settings for your dream wedding.',
            'photography' => true,
            'wedding_cake' => true,
            'extra_decorations' => false,
            'detailed_info' => 'Full details about the elegant wedding including specific locations, florists, cake designers, photographers, and everything you would need to create the perfect day.',
            'timeline' => 'Timeline for the wedding day: 9:00 AM - 12:00 PM: Venue setup, 1:00 PM - 4:00 PM: Wedding ceremony, and much more...',
        ];

        return view('wedding.show', ['package' => $package]);
    }
}
