<?php

namespace App\Http\Controllers;
use App\Suratmasuk;
use PDF;
use Response;
use Illuminate\Http\Request;

class SuratmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suratmasuk = Suratmasuk::all();
        return view('surat_masuk.index',compact('suratmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat_masuk.create');
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
            'surat' => 'required',
            'keterangan' => 'required'
        ]);

        Suratmasuk::create($request->all());
        return redirect()->route('suratmasuk')
                        ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($surat)
    {
        
        $suratmasuk = Suratmasuk::where('surat', $surat)->get()->first();
        $file = public_path()."/surat/".$surat;
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, $surat,$headers);

        // $pdf = PDF::loadview('pdf.surat',['suratmasuk'=>$suratmasuk]);
        // return $pdf->stream();

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suratmasuk = Suratmasuk::where('id', $id)->first();
        return view('surat_masuk.edit',compact('suratmasuk'));
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
        $request->validate([
            'surat' => 'required',
            'keterangan' => 'required'
        ]);

        $suratmasuk = Suratmasuk::where('id', $id)->update([
            'surat' => $request['surat'],
            'keterangan' => $request['keterangan'],
        ]);
         
        /// setelah berhasil mengubah data
        return redirect()->route('suratmasuk')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Suratmasuk::destroy($id);
  
        return redirect()->route('suratmasuk')
                        ->with('success','Post deleted successfully');
    }
}
