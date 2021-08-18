<?php

namespace App;
use App\Kelas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $table = "siswas";

    protected $fillable = [
        'nisn', 'nama','kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
    }
}