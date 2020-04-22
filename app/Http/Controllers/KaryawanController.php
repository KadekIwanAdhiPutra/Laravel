<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('admin')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title='karyawan';
        $karyawan=Karyawan::paginate(2);
        return view('admin.beranda',compact('title','karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='input karyawan';
        return view('admin.inputkaryawan',compact('title'));
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
            'namaKaryawan'=>'required',
            'noTelp'=>'required',
        ],$messages);
        Karyawan::create($validasi);
        return redirect('karyawan')->with('success', 'Data berhasil di update');
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
        $title='input karyawan';
        $karyawan=Karyawan::find($id);
        return view('admin.inputkaryawan',compact('title','karyawan'));
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
            'namaKaryawan'=>'required',
            'noTelp'=>'required'
        ],$messages);
        Karyawan::whereId_Karyawan($id)->update($validasi);
        return redirect('Karyawan')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::whereId_Karyawan($id)->delete();
        return redirect('Karyawan')->with('success', 'Data berhasil di update');
    }
}
