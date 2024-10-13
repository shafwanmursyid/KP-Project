<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NomorHp;

class NomorHpController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nomor_hp' => 'required|numeric',
        ]);

        // Simpan ke database
        NomorHp::create([
            'nomor_hp' => $request->nomor_hp,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Nomor HP berhasil disimpan! Mohon tunggu balasan dari kami');
    }
}
