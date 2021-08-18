<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use App\Siswa;
use App\Kelas;
use App\Surat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count = Petugas::get()->count();
        $countSiswa = Siswa::get()->count();
        $countKelas = Kelas::get()->count();
        $countSurat = Surat::get()->count();
        return view('dashboard.index', compact('count', 'countSiswa','countKelas','countSurat'));
    }
}
