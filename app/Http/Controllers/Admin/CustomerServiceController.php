<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerServiceController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'List Customer Service',
            'users'     => User::where('role', 'CS')->get(),
            'content'   => 'admin/customer-service/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
