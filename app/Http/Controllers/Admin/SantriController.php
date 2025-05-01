<?php

namespace App\Http\Controllers\Admin;

use App\Models\Santri;
use App\Models\Wisma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SantriController extends Controller
{
    public function index()
    {
        // $list_santri = Santri::get();
        $list_santri = Santri::with(['wisma'])->get();
        $list_wisma = Wisma::all();

        return view('admin.santri', compact('list_santri', 'list_wisma'));
    }

    public function sekolahUmum()
    {
        $list_santri = Santri::whereNotNull('sekolah_umum')->get();
        return view('admin.umum', compact('list_santri'));
    }
    public function sekolahMadrasah()
    {
        $list_santri = Santri::whereNotNull('sekolah_madrasah')->get();
        return view('admin.madin', compact('list_santri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama_santri' => 'required',
            // 'gender' => 'required',
            'gender' => 'required|in:laki-laki,perempuan',
            // 'wisma' => 'required'
        ]);

        $santri = Santri::create([
            "nik" => $request->nik,
            "nama_santri" => $request->nama_santri,
            "sekolah_umum" => $request->sekolah_umum,
            "sekolah_madrasah" => $request->sekolah_madrasah,
            "gender" => $request->gender,
            "wisma_id" => $request->wisma
        ]);

        $santri->pembayaranSantri()->create([
            'dibayar' => 0,
        ]);

        return redirect()->back()->with(['icon' => 'success', 'message' => "Santri <b> $request->nama_santri </b> di tambahkan"]);
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_santri' => 'required',
            'nik' => 'required',
            'gender' => 'required|in:laki-laki,perempuan',
            'wisma' => 'required'
        ]);

        $santri = Santri::findOrFail($id);

        $santri->update([
            'nama_santri' => $request->nama_santri,
            'nik' => $request->nik,
            'gender' => $request->gender,
            'wisma_id' => $request->wisma
        ]);

        return redirect()->back()->with(['icon' => 'success', 'message' => "Santri <b>$request->nama_santri</b> di ubah"]);
    }

    public function destroy(string $id)
    {
        $santri = Santri::findOrFail($id);
        $nama_santri = $santri->nama_santri;

        $santri->delete();

        return redirect()->back()->with(['icon' => 'success', 'message' => "Santri dengan nama <b>$nama_santri</b> berhasil di hapus"]);
    }
}
