<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\User;
=======
use App\Models\PersonalTrainer;
>>>>>>> 73cf6c69eb5d1a1fd51edb67521cad4d3a446a98
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonalTrainerController extends Controller
{
    public function index()
    {
        // Mengatur data untuk view
        $data = [
<<<<<<< HEAD
            'title'     => 'List Personal Trainer',
            'users'     => User::where('role', 'PT')->get(),
            'content'   => 'admin/personal-trainer/index'
=======
            'title' => 'Personal Trainer',
            'content' => 'admin/personal-trainer/index',
            'personal_trainers' => PersonalTrainer::all(),
>>>>>>> 73cf6c69eb5d1a1fd51edb67521cad4d3a446a98
        ];

        // Mengembalikan view dengan data yang telah diset
        return view('admin.layouts.wrapper', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Personal Trainer',
            'content' => 'admin/personal-trainer/create',
            'personal_trainers' => PersonalTrainer::all(),
        ];

        // Mengembalikan view dengan data yang telah diset
        return view('admin.layouts.wrapper', $data);
        // return view('admin.personal-trainer.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|max:250',
            'phone_number' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ]);

        $data['user_id']=Auth::user()->id;

        // Menambahkan nilai role secara otomatis
        $validatedData['role'] = 'Personal Trainer';

        PersonalTrainer::create($validatedData);

        return redirect(route('personal-trainer'));
    }


    public function show()
    {
        //
    }

    public function edit(string $id)
    {
        $personalTrainer = PersonalTrainer::findOrFail($id);
    
        $data = [
            'title' => 'Edit Personal Trainer',
            'content' => 'admin/personal-trainer/edit',
            'personalTrainer' => $personalTrainer,
        ];
    
        return view('admin.layouts.wrapper', $data);
    }

    public function update()
    {
        //
    }

    public function destroy(string $id)
    {
        $personalTrainer = PersonalTrainer::findOrFail($id);
        $personalTrainer->delete();
        return redirect(route('personal-trainer'));
    }
}
