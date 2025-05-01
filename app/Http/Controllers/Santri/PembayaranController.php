<?php

namespace App\Http\Controllers\Santri;

use App\Http\Controllers\Controller;
use App\Models\PembayaranSantri;
use App\Models\Santri;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // if ($request->santri) {
        //     $santri = Santri::with(['pembayaranSantri'])->find($request->santri);
        // } else {
        //     $santri = null;
        // }

        // $list_santri = Santri::all();

        // Ambil semua santri dari database
        $list_santri = Santri::all();

        // Cek apakah ada parameter santri dalam request
        if ($request->has('santri')) {
            // Ambil data santri yang dipilih berdasarkan ID
            $santri = Santri::with(['pembayaranSantri'])->find($request->santri);
        } else {
            // Tidak ada santri yang dipilih, set santri ke null
            $santri = null;
        }

        // $pembayaranSantri = PembayaranSantri::with('santri')->orderBy('tahun')->orderBy('bulan')->get();
        return view('petugas.pembayaran', compact('santri', 'list_santri'));
        // return view('petugas.pembayaran', compact('pembayaranSantri', 'list_santri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pembayaran = PembayaranSantri::findOrFail($id);

        $pembayaran->update([
            'dibayar' => $request->dibayar,
        ]);

        return redirect()->back()->with(['icon' => 'success', 'message' => "Pemabayaran ditambahkan"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
