<?php

namespace App\Http\Controllers;

use App\Surat;
use App\Petugas;
use Illuminate\Http\Request;
use PDF;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surats = Surat::all();
        return view('datamaster/surat/index',compact('surats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surats = Surat::all();
        $petugas = Petugas::all();
        return view('datamaster/surat/create', compact('surats','petugas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Surat::create($request->all());
        return redirect()->route('surat')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat = Surat::where('id', $id)->get()->first();
 
        $pdf = PDF::loadview('pdf.surat',['surat'=>$surat]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $surat = Surat::where('id', $id)->first();

        $petugas = Petugas::all();
        return view('datamaster/surat/edit',compact('surat','petugas'));
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

        
        $surat = Surat::where('id', $id)->update([
            'template_surat' => $request ['template_surat'],
            'logo_perusahaan' => $request ['logo_perusahaan'],
            'petugas_id' => $request ['petugas_id'],
            'alamat_perusahaan' => $request ['alamat_perusahaan'],
            // 'jabatan' => $request ['jabatan']

        ]);
        return redirect()->route('surat')->with('success','Data berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect('/datamaster/surat')->with('success', 'Data berhasil Di Hapus');
    }
}
