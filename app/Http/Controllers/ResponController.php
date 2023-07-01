<?php

namespace App\Http\Controllers;

use App\Models\Respon;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ResponController extends Controller
{
    public function setData() {
        $pengaduan = Pengaduan::all();
        return view('admin.content.content-pengaduan', ['pengaduan' => $pengaduan]);
    }

    public function setFormInsert($id) {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('admin.tanggapan', compact('pengaduan'));
    }

    public function insertRespon(Request $request, $id)
    {
        $validated = $request->validate([
            'tanggal_ditanggapi' => 'required',
            'status' => 'required',
            'tanggapan' => 'required',
        ]);

        if ($validated) {
            $pengaduan = Pengaduan::findOrFail($id);
            $pengaduan->tanggal_ditanggapi = $request->tanggal_ditanggapi;
            $pengaduan->status = $request->status;
            $pengaduan->tanggapan = $request->tanggapan;
            $pengaduan->save();

            return redirect('/data-pengaduan')->with('message', 'Tanggapan berhasil ditambahkan');
        }
    }

    public function deleteData(Request $request) {
        $id = $request->id;
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();
        return back()->with('message','Pengaduan berhasil dihapus');
    }

    public function setDataLaporanAdmin() {
        return view('admin.content.content-respon');
    }

    public function setDataLaporanUser() {
        $idProfil = Auth::id();

        $pengaduan = Pengaduan::where('id_profil', $idProfil)->get();
        return view('user.content.content-respon', compact('pengaduan'));
    }

    public function detailRespon($id) {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('user.detail-respon-lpm', compact('pengaduan'));
    }

    public function getLaporan(Request $request) {
        $from = $request->from . ' ' . '00:00:00';
        $to = $request->to . ' ' . '23:59:59';

        $pengaduan = Pengaduan::whereBetween('tanggal_pengaduan', [$from, $to])->get();
        return view('admin.content.content-respon', ['pengaduan' => $pengaduan, 'from' => $from, 'to' => $to]);
    }

    public function cetakLaporan($from, $to) {
        $pengaduan = Pengaduan::whereBetween('tanggal_pengaduan', [$from, $to])->get();

        $pdf = Pdf::loadView('laporan.cetak-laporan', ['pengaduan' => $pengaduan]);
        return $pdf->download('laporan-pengaduan-masyarakat-jember.pdf');
    }
}  
