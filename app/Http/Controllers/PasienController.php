<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasiens = Pasien::all();
        return view("home", compact("pasiens"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pasiens.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     // $this->validate($request, Pasien::$rules);
    //     $validated = $request->validate([
    //     'title' => 'required|unique:posts|max:255',
    //     'body' => 'required',
    // ]);
        $data = $request->validate([
            'nama' => 'string|max:255',
            'ttl'  => 'string|max:255',
            'alamat' => 'string',
            'pekerjaan' => 'string',
        ]);

        Pasien::create($data);
    
        return redirect("home")->with("success","Data pasien berhasil ditambahkan");

    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        return view("pasiens.show", compact("pasien"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view("pasiens.edit", compact("pasien"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $data = $request->validate([
            'nama' => 'string|max:255',
            'ttl'  => 'string|max:255',
            'alamat' => 'string',
            'pekerjaan' => 'string',
        ]);
        $pasien->update($data);
        return redirect("home")->with("success","Data pasien berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect("home")->with("success","Data pasien berhasil dihapus");
    }
}
