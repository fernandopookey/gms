<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPackageController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $data = [
            'title'     => 'Paket Member Saya',
            // 'users'     => User::where('role', 'MEMBER')->get(),
            'my'        => $user,
            'content'   => 'admin/my-package/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }
}
