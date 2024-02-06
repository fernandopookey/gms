<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageTransaction;
use Illuminate\Http\Request;

class PackageTransactionController extends Controller
{
    public function index()
    {
        $data = [
            'title'                 => 'List Transaksi Member',
            'packageTransaction'    => PackageTransaction::get(),
            'content'               => 'admin/package-transaction/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title'     => 'Tambah Member',
            'content'   => 'admin/members/create'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'member_id'          => 'required',
            'member_package_id'        => 'required',
            'start_date'  => 'nullable',
            'address'       => 'nullable',
            'description'   => 'nullable',
            'photos'        => 'mimes:png,jpg,jpeg|max:2048',
            'email'         => 'required|email',
            'role'          => '',
        ]);

        $data['password'] = bcrypt($request->password);

        $data['user_id'] = Auth::user()->id;


        if ($request->hasFile('photos')) {

            if ($request->photos != null) {
                $realLocation = "storage/" . $request->photos;
                if (file_exists($realLocation) && !is_dir($realLocation)) {
                    unlink($realLocation);
                }
            }

            $photos = $request->file('photos');
            $file_name = time() . '-' . $photos->getClientOriginalName();

            $data['photos'] = $request->file('photos')->store('assets/member', 'public');
        } else {
            $data['photos'] = $request->photos;
        }
        // Member::create($data);
        User::create($data);
        return redirect(route('member.index'))->with('success', 'Data Member Berhasil Di tambah');
    }

    public function edit(string $id)
    {
        $data = [
            'title'     => 'Edit Member',
            'member'    => User::find($id),
            'content'   => 'admin/members/edit'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, string $id)
    {
        $item = Member::find($id);
        $data = $request->validate([
            'full_name'     => 'nullable',
            'gender'        => 'nullable',
            'phone_number'  => 'nullable',
            'address'       => 'nullable',
            'description'   => 'nullable',
            'photos'        => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('photos')) {

            if ($request->photos != null) {
                $realLocation = "storage/" . $request->photos;
                if (file_exists($realLocation) && !is_dir($realLocation)) {
                    unlink($realLocation);
                }
            }

            $photos = $request->file('photos');
            $file_name = time() . '-' . $photos->getClientOriginalName();

            $data['photos'] = $request->file('photos')->store('assets/member', 'public');
        } else {
            $data['photos'] = $request->photos;
        }

        $item->update($data);
        return redirect()->route('member.index')->with('message', 'Member Updated Successfully');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect(route('member.index'))->with('success', 'Data Member Berhasil Di hapus');
    }
}
