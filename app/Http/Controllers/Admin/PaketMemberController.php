<?php

namespace App\Http\Controllers\Admin;

use App\Models\PaketMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaketMemberController extends Controller
{
    public function index()
    {
        // $paket_members = PaketMember::all();

        // return view('admin.paket-member.index', compact('paket_members'));

        $data = [
            'title'         => 'Daftar Paket Member',
            'paketMembers'  => PaketMember::get(),
            'content'       => 'admin/paket-member/index'
        ];

        return view ('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title'         => 'Tambah Paket Member',
            'content'       => 'admin/paket-member/create'
        ];

        return view ('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'package_name' => 'required|string|max:255',
            'days' => 'required|string|max:255',
            'package_price' => 'required|string|max:255',
            'admin_price' => 'required|string|max:255',
            'description' => 'required|string',
        ])->validate();

        $member_packages = new PaketMember($validatedData);
        $member_packages->save();

        return redirect(route('daftarPaketMember'))->with('success', 'Data Berhasil Disimpan');
    }

    public function edit(string $id)
    {
        $paketMember = PaketMember::findOrFail($id);

        $data = [
            'title'         => 'Edit Paket Member',
            'paketMember'   => $paketMember,
            'content'       => 'admin.paket-member.edit'
        ];

        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $validatedData = validator($request->all(), [
            'package_name' => 'required|string|max:255',
            'days' => 'required|string|max:255',
            'package_price' => 'required|string|max:255',
            'admin_price' => 'required|string|max:255',
            'description' => 'required|string',
        ])->validate();

        $member_packages = PaketMember::findOrFail($id); 

        $member_packages->update([
            'package_name' => $request->package_name,
            'days' => $request->days,
            'package_price' => $request->package_price,
            'admin_price' => $request->admin_price,
            'description' => $request->description,
        ]);

        return redirect(route('daftarPaketMember'))->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(string $id)
    {
        
        $paketMember = paketMember::findOrFail($id);
        $paketMember->delete();
        return redirect(route('daftarPaketMember'))->with('success', 'Data Berhasil Di hapus');
    }

}