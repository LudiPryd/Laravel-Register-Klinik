<?php

namespace App\Http\Controllers;

use App\Models\klinik;
use PDF;
use Illuminate\Http\Request;

class KlinikControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $klinik = Klinik::all();

        return view('klinik.index',compact('klinik'))->with('i');
    }

    public function cetak_pdf()
    {
        $klinik = Klinik::all();

        $klinik = PDF::loadview('klinik.pdf',['klinik'=>$klinik])->setPaper('a4', 'landscape');
        return $klinik->download('laporan-klinik.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('klinik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama'=>'required',
            'No_Telepon'=>'required',
            'Alamat'=>'required',
            'Jenis_Peliharaan'=>'required',
            'tgl_kunjungan'=>'required',
            'Sesi'=>'required',
            'Keluhan'=>'required',
        ]);

        $klinik = Klinik::create($request->all());

        return redirect()->route('klinik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('klinik.show', [
            'klinik' => Klinik::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klinik = Klinik::findOrFail($id);

        return view('klinik.edit', compact('klinik'));
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
        $validasiData = $request->validate([
            'Nama'=>'required',
            'No_Telepon'=>'required',
            'Alamat'=>'required',
            'Jenis_Peliharaan'=>'required',
            'tgl_kunjungan'=>'required',
            'Sesi'=>'required',
            'Keluhan'=>'required',
        ]);

        Klinik:: whereId($id)->update($validasiData);

        return redirect()->route('klinik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $klinik = Klinik::findOrFail($id);
        $klinik->delete();

        return redirect()->route('klinik.index');
    }
}
