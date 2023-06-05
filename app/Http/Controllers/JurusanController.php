<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = jurusan::orderBy('id_jurusan','ASC')->get();
        return view ('jurusan.index', compact('jurusan'));
    }
    public function report()
    {
        $jurusan = jurusan::get();
        return view ('jurusan.report', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jurusan'=> 'required',
        ]);

        $jurusan = new jurusan([
            'jurusan' => $request->jurusan,
        ]);

        $jurusan->save();

        return redirect()->route('jurusan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = jurusan::find($id);
        return view('jurusan.edit', [
            'jurusan' => $jurusan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $jurusan = jurusan::findOrFail($id_jurusan);
        // $jurusan->update($request->all());

        // return redirect()->route('jurusan.index');
        // dd($request);
        $jurusan = jurusan::find($id);
        $rules = [
            'jurusan'=> 'required',
        ];
        if ($request->jurusan != $jurusan->jurusan) {
            $rules['jurusan'] = 'required';
        };
        $validated = $request->validate($rules);
        jurusan::where('id_jurusan',$id)->update($validated);
        return redirect('jurusan')->with('success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $jurusan)
    {
        $jurusan = jurusan::findOrFail($jurusan);
        $jurusan->delete($request->all());

        return redirect()->route('jurusan.index');
    }
}
