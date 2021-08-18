<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugass = Petugas::all();
        return view('datamaster/petugas/index',compact('petugass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datamaster/petugas/create');
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
            'nama_peserta' => 'required',
            'nis' => 'required',
            'nama_perusahaan' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'tanggal_berakhir' => 'required',
            'kontak' => 'required',
            'tanggal_surat' => 'required',
            'monitoring' => 'required',
            'keterangan' => 'required'
        ]);
        Petugas::create($request->all());
        return redirect()->route('petugas')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('datamaster/petugas/show',compact('petugas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = Petugas::where('id', $id)->first();
        
        return view('datamaster/petugas/edit',compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'nama_peserta' => 'required',
            'nis' => 'required',
            'nama_perusahaan' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'tanggal_berakhir' => 'required',
            'kontak' => 'required',
            'tanggal_surat' => 'required',
            'monitoring' => 'required',
            'keterangan' => 'required'
        ]);

        $petugas = Petugas::where('id', $id)->update([
            'nama_peserta' => $request ['nama_peserta'],
            'nis' => $request ['nis'],
            'nama_perusahaan' => $request ['nama_perusahaan'],
            'tanggal_pelaksanaan' => $request ['tanggal_pelaksanaan'],
            'tanggal_berakhir' => $request ['tanggal_berakhir'],
            'kontak' => $request ['kontak'],
            'tanggal_surat' => $request ['tanggal_surat'],
            'monitoring' => $request ['monitoring'],
            'keterangan' => $request ['keterangan']

        ]);
        return redirect()->route('petugas')->with('success','Data berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Petugas::destroy($id);
        return redirect('/datamaster/petugas')->with('success', 'Data berhasil Di Hapus');
    }
}
