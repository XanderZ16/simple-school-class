<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Teacher::all();
        $title = 'Daftar Guru';
        return view('kelas.index', compact('kelas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Guru";
        return view('teacher.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'teacher_of' => 'required|numeric',
            'skill' => 'required|numeric',
            'profile_pic' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('profile_pic')) {
            $validatedData['image'] = $request->file('profile_pic')->store('teacher_profile_pics');
        }

        Teacher::create($validated_data);

        return redirect('/kelas')->with('success', 'Data kelas berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
