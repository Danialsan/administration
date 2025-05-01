<?php

namespace App\Http\Controllers\Santri;

use App\Http\Controllers\Controller;
use App\Models\PerizinanSantri;
use App\Models\Santri;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perizinanSantri = PerizinanSantri::with(['santri'])->get();
        $list_santri = Santri::all();
        return view('petugas.perizinan', compact('perizinanSantri', 'list_santri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $santriId = $request->input('santri_id');

    //     $izinBulanan = PerizinanSantri::whereMonth('created_at', date('m'))
    //         ->whereYear('created_at', date('Y'))
    //         ->pluck('santri_id')->toArray();


    //     $perizinanSantri = PerizinanSantri::create([
    //         'no_surat' => $request->no_surat,
    //         'jenis_surat' => $request->jenis_surat,
    //         'santri_id' => $request->santri
    //     ]);

    //     return redirect()->back()->with([
    //         'icon' => 'success',
    //         'message' => "Perizinan siswa di tambahkan",
    //         'izinBulanan' => $izinBulanan,
    //     ]);
    // }
    public function store(Request $request)
    {
        $santriId = $request->input('santri');

        // Ambil data santri yang sudah memiliki perizinan bulan ini
        $izinBulanan = PerizinanSantri::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->pluck('santri_id')
            ->toArray();

        // Cek apakah santri yang dipilih sudah membuat perizinan bulan ini
        // if (in_array($santriId, $izinBulanan)) {
        //     return redirect()->back()->with([
        //         'icon' => 'error',
        //         'message' => 'Santri ini sudah membuat perizinan pada bulan ini.',
        //         'izinBulanan' => $izinBulanan,
        //     ]);
        // }

        if (in_array($santriId, $izinBulanan)) {
            return redirect()->back()->withErrors(['Santri ini sudah membuat perizinan pada bulan ini.']);
        }

        // Jika belum ada perizinan bulan ini, simpan data perizinan baru
        PerizinanSantri::create([
            'no_surat' => $request->no_surat,
            'jenis_surat' => $request->jenis_surat,
            'santri_id' => $santriId,
        ]);

        // Setelah berhasil, kembalikan dengan pesan sukses
        return redirect()->back()->with([
            'icon' => 'success',
            'message' => "Perizinan siswa ditambahkan",
            'izinBulanan' => $izinBulanan,
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perizinan = PerizinanSantri::findOrFail($id);
        $nama_perizinan = $perizinan->santri->nama_santri;
        $perizinan->delete();

        return redirect()->back()->with(['icon' => 'success', 'message' => "Perizinan $nama_perizinan di hapus"]);
    }
}
