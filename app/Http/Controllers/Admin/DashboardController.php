<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'Dashboard Admin GYM',
            'admin'     => User::where('role', 'ADMIN')->count(),
            'cs'        => User::where('role', 'CS')->count(),
            'pt'        => User::where('role', 'PT')->count(),
            'member'    => User::where('role', 'MEMBER')->count(),
            'content'   => 'admin/home/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
