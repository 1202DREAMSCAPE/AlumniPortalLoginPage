<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventBooking;

class EventBookingController extends Controller
{
    public function create()
    {
        return view('AlumniBook');
    }
    public function store(Request $request)
{
   $validatedData = $request->validate([
       'EventName' => 'required',
       'EDate' => 'required',
       'ELoc' => 'required',
       'EDesc' => 'required',
       'TimeStart' => 'required',
       'TimeEnd' => 'required',
   ]);

   $event = new EventBooking;
   $event->EventName = $request->EventName;
   $event->EDate = $request->EDate;
   $event->ELoc = $request->ELoc;
   $event->EDesc = $request->EDesc;
   $event->TimeStart = $request->TimeStart;
   $event->TimeEnd = $request->TimeEnd;
   $event->save();

   return redirect()->back()->with('success', 'Request for Booking Event has been successfully sent.');
}

}
