<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PersonalTrainerController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'List Personal Trainer',
            'users'     => User::where('role', 'PT')->get(),
            'content'   => 'admin/personal-trainer/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
