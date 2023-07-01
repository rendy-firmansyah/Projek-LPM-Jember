<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{

    public function setData() {
        $idProfil = Auth::id();
        
        $pengaduan = Pengaduan::where('id_profil', $idProfil)->get();
        return view('user.content.content-pengaduan', ['pengaduan' => $pengaduan]);
    }

    public function setFormInsert() {
        $setFormPengaduan = Pengaduan::all();
        return view('user.insert-data', compact('setFormPengaduan'));
    }

    public function insertData(Request $request) {
        $validated = $request->validate([
            'nama_pelapor' => 'required',
            'nik' => 'required',
            'usia' => 'required',
            'telepon' => 'required',
            'tanggal_pengaduan' => 'required',
            'deskripsi_laporan' => 'required',
        ]);

        if ($validated) {
            $idProfil = Auth::id();

            $setPengaduan = new Pengaduan();
            $setPengaduan->id_profil = $idProfil;
            $setPengaduan->nama_pelapor = $request->nama_pelapor;
            $setPengaduan->nik = $request->nik;
            $setPengaduan->usia = $request->usia;
            $setPengaduan->telepon = $request->telepon;
            $setPengaduan->tanggal_pengaduan = $request->tanggal_pengaduan;
            $setPengaduan->deskripsi_laporan = $request->deskripsi_laporan;

            $setPengaduan->save();
            // dd("cek");

            return redirect('/pengaduan')->with('message','Pengaduan berhasil ditambahkan');
        }
    }

    public function setFormUpdate($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('user.update-data', compact('pengaduan'));
    }

    public function updateData(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'required',
            'nik' => 'required',
            'usia' => 'required',
            'telepon' => 'required',
            'tanggal_pengaduan' => 'required',
            'deskripsi_laporan' => 'required',
        ]);

        if ($validated) {
            $pengaduan = Pengaduan::findOrFail($id);
            $pengaduan->nama_pelapor = $request->nama_pelapor;
            $pengaduan->nik = $request->nik;
            $pengaduan->usia = $request->usia;
            $pengaduan->telepon = $request->telepon;
            $pengaduan->tanggal_pengaduan = $request->tanggal_pengaduan;
            $pengaduan->deskripsi_laporan = $request->deskripsi_laporan;
            $pengaduan->save();

            return redirect('/pengaduan')->with('message', 'Pengaduan berhasil diperbarui');
        }
    }

    public function showDetail($id) {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('user.detail', compact('pengaduan'));
    }
}
