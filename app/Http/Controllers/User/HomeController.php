<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title'                             => 'Dashboard Admin GYM',
            'content'                           => 'users/index'
        ];
        return view('users.layouts.wrapper', $data);
    }
}
