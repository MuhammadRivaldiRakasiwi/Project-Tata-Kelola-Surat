<?php

namespace App;
use App\Petugas;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    public $table = "surats";

    protected $fillable = [
        'template_surat', 'logo_perusahaan','nama_perusahaan','petugas_id','alamat_perusahaan','jabatan'
    ];

    public function petugas()
    {
        return $this->belongsTo('App\Petugas');
    }

}