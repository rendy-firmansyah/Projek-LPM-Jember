<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserAkunController extends Controller
{
    public function getUsersByRole() {
        $roleName = 'user';
        $role = Role::where('name', $roleName)->first();
        $users = User::role($roleName)->get();

        return view('admin.content.content-user', compact('users'));
    }
}
