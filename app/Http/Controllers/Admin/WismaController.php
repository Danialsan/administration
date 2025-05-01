<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Wisma;

class WismaController extends Controller
{
    public function index()
    {
        $list_wisma = Wisma::get();

        return view('admin.pengaturan-wisma', compact('list_wisma'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wisma' => 'required',
            'singkatan' => 'required',
            'pembayaran' => 'required',
        ]);

        $wisma = Wisma::create([
            'nama_wisma' => $request->nama_wisma,
            'singkatan' => $request->singkatan,
            'pembayaran' => $request->pembayaran,
        ]);

        return redirect()->back()->with(['icon' => 'success', 'message' => "Wisma <b> $request->nama_wisma </b> di Tambahkan"]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_wisma' => 'required',
            'singkatan' => 'required',
            'pembayaran' => 'required',
        ]);

        $wisma = Wisma::findOrFail($id);

        $wisma->update([
            'nama_wisma' => $request->nama_wisma,
            'singkatan' => $request->singkatan,
            'pembayaran' => $request->pembayaran,
        ]);

        return redirect()->back()->with(['icon' => 'success', 'message' => "Wisma <b> $request->nama_wisma </b> di ubah"]);
    }

    public function destroy(string $id)
    {
        $wisma = Wisma::findOrFail($id);

        $nama_wisma = $wisma->nama_wisma;

        $wisma->delete();

        return redirect()->back()->with(['icon' => 'success', 'message' => "Wisma <b>$nama_wisma</b> berhasil di hapus"]);
    }
}
