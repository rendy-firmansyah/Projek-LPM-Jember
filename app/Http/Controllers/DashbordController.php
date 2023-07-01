<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashbordController extends Controller
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
        $getTotalPengaduan = Pengaduan::count();
        $roleName = 'user';
        $role = Role::where('name', $roleName)->first();
        $getTotalUsers = User::role($roleName)->count();
        return view('dashbord-admin', compact('getTotalPengaduan', 'getTotalUsers'));
    }
}
