<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $data = [
            'title'   => 'Our Team',
            'content' => 'users.team'
        ];
        return view('users.layouts.wrapper', $data);
    }
}
