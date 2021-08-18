<?php

namespace App;
use App\Surat;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{   

    public $table = "petugass";

    protected $fillable = [
    	'nama_peserta', 'nis', 'nama_perusahaan', 'tanggal_pelaksanaan', 'tanggal_berakhir', 'kontak', 'tanggal_surat', 'monitoring', 'keterangan'
    ];

    public function surat()
    {
        return $this->hasOne('App\Surat');
    }
}
