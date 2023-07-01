<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $userId = auth()->id();
        $getTotalPengaduanSaya = Pengaduan::where('id_profil', $userId)->count();
        return view('dashbord-user', compact('getTotalPengaduanSaya'));
    }
}
