<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

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

        Booking::create([
            'event_type' => json_encode($request->event_type),
            'event_type_other' => $request->event_type_other,
            'venue' => $request->venue,
            'venue_address' => $request->venue_address,
            'guest_count' => $request->guest_count,
            'budget' => $request->budget,
            'special_requests' => $request->special_requests,
            'event_date' => $request->event_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'services' => json_encode($request->services),
            'services_other' => $request->services_other,
        ]);

        return redirect()->route('book.create')->with('success', 'Booking request submitted successfully!');
    }
}
