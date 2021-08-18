<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    Public function pdf(){

        $data = 'Test doang';
        $pdf = PDF::loadView('pdf.surat');
        return $pdf->stream();
    }
}
