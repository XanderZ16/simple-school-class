<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kelas = Kelas::all();
        $search_query = $request->search;
        $title = 'Daftar Kelas';

        if (!empty($search_query)) {
            $kelas = Kelas::where('id', 'LIKE', "%$search_query%")
                            ->orWhere('class_name', 'LIKE', "%$search_query%")
                            ->get();
        }

        $search = $request->search ?? null;
        return view('kelas.index', compact('kelas', 'search', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Kelas";
        return view('kelas.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
            'class_teacher' => 'required',
            'class_leader' => 'required',
            'chair' => 'required|numeric',
            'desk' => 'required|numeric',
            'class_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $class_image_name = '';
        if ($request->hasFile('class_image')) {
            $class_image = $request->file('class_image');
            $class_image_name = time() . '.' . $class_image->getClientOriginalExtension();
            $class_image->move(public_path('class_image'), $class_image_name);
        }

        Kelas::create([
            'class_name' => $request->class_name,
            'class_teacher' => $request->class_teacher,
            'class_leader' => $request->class_leader,
            'chair' => $request->chair,
            'desk' => $request->desk,
            'image' => $class_image_name,
        ]);

        return redirect('/kelas')->with('success', 'Data kelas berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        if(!$kelas) {
            return redirect('/kelas')->with('error', 'Kelas tidak ditemukan');
        }
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelas $kelas)
    {
        $this->validate($request, [
            'class_name' => 'required',
            'class_teacher' => 'required',
            'class_leader' => 'required',
            'chair' => 'required',
            'desk' => 'required',
            'class_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $class_image_name = $kelas->image;
        if ($request->hasFile('class_image')) {
            $class_image = $request->file('class_image');
            $class_image_name = time() . '.' . $class_image->getClientOriginalExtension();
            $class_image->move(public_path('class_images'), $class_image_name);
        }

        $kelas->update([
            'class_name' => $request->class_name,
            'class_teacher' => $request->class_teacher,
            'class_leader' => $request->class_leader,
            'chair' => $request->chair,
            'desk' => $request->desk,
            'image' => $class_image_name,
        ]);

        return redirect('/kelas')->with('success', 'Data kelas berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect('/kelas')->with('success', 'Data kelas berhasil di hapus');
    }
}
