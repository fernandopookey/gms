<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index()
    {
        $data = [
            'title'     => 'List Member',
            'members'   => Member::get(),
            'users'     => User::get(),
            'content'   => 'admin/members/index'
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
            'full_name'     => 'required',
            'member_code'   => 'required',
            'gender'        => 'required',
            'phone_number'  => 'nullable',
            'address'       => 'nullable',
            'description'   => 'nullable',
            'photos'        => 'mimes:png,jpg,jpeg|max:2048'
        ]);


        $data['user_id'] = Auth::user()->id;
        $member = $request->member_code;
        $memberCode = $member;

        $existingRecord = Member::where('member_code', $memberCode)->first();

        if ($existingRecord) {
            return redirect()->back()->with('error', 'Code already exists');
        }

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
        Member::create($data);
        return redirect(route('member.index'))->with('success', 'Data Member Berhasil Di tambah');
    }

    public function edit($id)
    {
        $data = [
            'title'     => 'Edit Member',
            'member'    => Member::findOrFail($id),
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
            'member_code'   => 'nullable',
            'photos'        => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $data['user_id'] = Auth::user()->id;

        if (!isset($data['member_code'])) {
            $data['member_code'] = $item->member_code;
        } elseif ($data['member_code'] !== $item->member_code) {
            $member = $data['member_code'];
            $memberCode = $member;

            $existingRecord = Member::where('member_code', $memberCode)->first();
            if ($existingRecord && $existingRecord->id != $id) {
                return redirect()->back()->with('error', 'Code already exists');
            }
            $data['member_code'] = $memberCode;
        }

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
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect(route('member.index'))->with('success', 'Data Member Berhasil Di hapus');
    }
}
