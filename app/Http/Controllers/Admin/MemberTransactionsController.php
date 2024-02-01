<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberTransactionsController extends Controller
{
    public function index()
    {
        // $data = [
        //     'title'     => 'List Transaksi Member',
        //     // 'users'     => User::where('role', 'MEMBER')->get(),
        //     // 'content'   => 'admin/member-transactions/index'
        // ];

        // return view('admin.layouts.wrapper', $data);

        $data = [
            'title'     => 'List Transaksi Member',
            // other data...
        ];

        return view('admin.member-transactions.index', $data);
    }
}
