<?php

namespace App\Http\Controllers;
use App\Models\BookingForm;
use Illuminate\Http\Request;

class BookingFormController extends Controller
{
    public function index()
    {
        return view('bookingform');
    }

    public function store(Request $request)
    {
        $bookingform = new BookingForm;
        $bookingform->fullname = $request->fullname;
        $bookingform->phone = $request->phone;
        $bookingform->email = $request->email;
        $bookingform->address = $request->address;
        $bookingform->save();
        return redirect('bookingform')->with('status', 'Request Booking Success');
    }
}
