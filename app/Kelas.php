<?php

namespace App;
use App\Siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $table = "kelass";

    protected $fillable = [
        'nama_kelas', 'jurusan'
    ];

    public function siswa()
    {
        return $this->hasOne('App\Siswa');
    }
}
