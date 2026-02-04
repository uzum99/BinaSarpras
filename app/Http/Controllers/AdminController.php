<?php

namespace App\Http\Controllers;

use App\Models\M_Aduan;
use App\Models\M_Kategori;
use App\Models\M_Siswa;
use App\Models\M_UmpanBalik;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // ===============================
    // HALAMAN INDEX (LIST ADUAN)
    // ===============================
    public function index()
    {
        $aduan = M_Aduan::all();
        return view('pages.admin.aduan.index', compact('aduan'));
    }
    public function show($id)
    {
        $aduan = M_Aduan::with([
            'kategori',
            'siswa',
            'umpanBalik.user'
        ])->findOrFail($id);

        return view('pages.admin.aduan.detail', compact('aduan'));
    }

    // ===============================
    // UPDATE STATUS ADUAN
    // ===============================
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:menunggu,proses,selesai'
        ]);

        $aduan = M_Aduan::findOrFail($id);
        $aduan->status = $request->status;
        $aduan->save();

        return back()->with('success', 'Status aduan berhasil diperbarui');
    }

    // ===============================
    // SIMPAN FEEDBACK ADMIN
    // ===============================
    public function storeFeedback(Request $request, $id)
    {
        $request->validate([
            'feedback' => 'required'
        ]);

        M_UmpanBalik::create([
            'id_aduan' => $id,
            'id_user'  => auth()->id(), // admin login
            'feedback' => $request->feedback,
        ]);

        return back()->with('success', 'Feedback berhasil dikirim');
    }
}
