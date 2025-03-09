<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function create()
    {
        return view('book.book_now');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'event_type' => 'array',
            'event_type_other' => 'nullable|string|max:255',
            'venue' => 'required|string',
            'venue_address' => 'nullable|string|max:255',
            'guest_count' => 'required|integer|min:1',
            'budget' => 'required|string',
            'special_requests' => 'nullable|string',
            'event_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'services' => 'array',
            'services_other' => 'nullable|string|max:255',
        ]);

        
        DB::insert("INSERT INTO bookings 
            (event_type, event_type_other, venue, venue_address, guest_count, budget, special_requests, event_date, start_time, end_time, services, services_other)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [
            json_encode($request->event_type),
            $request->event_type_other,
            $request->venue,
            $request->venue_address,
            $request->guest_count,
            $request->budget,
            $request->special_requests,
            $request->event_date,
            $request->start_time,
            $request->end_time,
            json_encode($request->services),
            $request->services_other
        ]);

        return redirect()->route('book.create')->with('success', 'Booking request submitted successfully!');
    }
    public function show()
{
    
    $bookings = DB::select('SELECT * FROM new_bookings');

    if (!$bookings) {
        return redirect()->route('home')->with('error', 'No bookings found.');
    }

    return view('booking', compact('bookings'));
}

    
}
