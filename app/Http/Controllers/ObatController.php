<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='obat';
        $obat=Obat::paginate(5);
        return view('admin.beranda',compact('title','obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='input obat';
        return view('admin.inputobat',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required'  => 'Kolom :attribute harus lengkap',
            'date'      => 'Kolom :attribute Harus Tanggal.',
            'numeric'   => 'Kolom :attribute Harus Angka.',
        ];
        $validasi = $request->validate([
            'namaObat'=>'required',
            'jenisObat'=>'required',
        ],$messages);
        Obat::create($validasi);
        return redirect('obat')->with('success', 'Data berhasil di update');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title='input obat';
        $obat=Obat::find($id);
        return view('admin.inputobat',compact('title','obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = [
            'required'  => 'Kolom :attribute harus lengkap',
            'date'      => 'Kolom :attribute Harus Tanggal.',
            'numeric'   => 'Kolom :attribute Harus Angka.',
        ];
        $validasi = $request->validate([
            'namaObat'=>'required',
            'jenisObat'=>'required'
        ],$messages);
        Obat::whereId_Obat($id)->update($validasi);
        return redirect('Obat')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Obat::whereId_Obat($id)->delete();
        return redirect('Obat')->with('success', 'Data berhasil di update');
    }
}
