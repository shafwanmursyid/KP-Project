<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use App\Models\NomorHp;

class BookingController extends Controller
{
    public function index()
    {
        // Ambil semua nomor HP yang telah diinput
        $nomor_hps = NomorHp::paginate(50);

        // Kirim data nomor HP ke view 'bookings.index'
        return view('admin.bookings.index', compact('nomor_hps'));
    }

    public function destroy($id)
    {
        $nomor_hp = NomorHp::findOrFail($id);
        $nomor_hp->delete();

        return redirect()->route('admin.bookings.index')->with('message', 'Nomor HP deleted successfully.');
    }

    public function store(BookingRequest $request)
    {
        Booking::create($request->validated());

        return redirect()->back()->with([
            'message' => "Success, we'll process your booking"
        ]);
    }

}
