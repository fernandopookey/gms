<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalTrainerController extends Controller
{
    public function index()
    {
        $data = [
            'title'                             => 'Personal Trainer',
            'content'                           => 'admin/personal-trainer/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
