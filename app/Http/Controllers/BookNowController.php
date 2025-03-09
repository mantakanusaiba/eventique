<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


 
    
    class BookNowController extends Controller
    {
        public function show($id)
        {
            $package = DB::selectOne('SELECT * FROM birthday_packages WHERE id = ?', [$id]);
    
            if (!$package) {
                return redirect()->back()->with('error', 'Package not found.');
            }
    
            return view('booknow', compact('package'));
        }
    
        public function store(Request $request, $id)
        {
            $request->validate([
                'email' => 'required|email',
                'guest_count' => 'required|integer|min:1',
                'venue_needed' => 'required|boolean',
            ]);
    
            $package = DB::selectOne('SELECT * FROM birthday_packages WHERE id = ?', [$id]);
    
            if (!$package) {
                return redirect()->back()->with('error', 'Package not found.');
            }
    
            $guestCount = $request->input('guest_count');
            $venueNeeded = $request->input('venue_needed');
    
            $venuePrice = $venueNeeded ? 500 : 0;
            $perGuestPrice = 10;
            $totalPrice = $package->price + ($guestCount * $perGuestPrice) + $venuePrice;
    
            DB::insert('INSERT INTO new_bookings (package_id, email, guest_count, venue_needed, total_price) VALUES (?, ?, ?, ?, ?)', [
                $id,
                $request->input('email'),
                $guestCount,
                $venueNeeded,
                $totalPrice,
            ]);
    
            $booking = DB::selectOne('SELECT * FROM new_bookings WHERE package_id = ? ORDER BY id DESC LIMIT 1', [$id]);

    
          
            return redirect()->back()->with('success', 'Booking submitted successfully!');

        }
    }
    