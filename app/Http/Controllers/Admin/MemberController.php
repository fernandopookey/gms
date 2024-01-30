<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $data = [
            'title'                             => 'List Member',
            'content'                           => 'admin/members/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
