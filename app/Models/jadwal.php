<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_jadwal';
    protected $table = 'jadwal_pelajarans';
    protected $fillable = ['hari','waktu','id_jurusan','id_kelas','id_matapelajaran'];

    public function kelas(){
        return $this->belongsTo(kelas::class,'id_kelas','id_kelas');
    }
    public function matapelajaran(){
        return $this->belongsTo(matapelajaran::class,'id_matapelajaran','id_matapelajaran');
    }

    public function jurusan(){
        return $this->belongsTo(jurusan::class,'id_jurusan','id_jurusan');
    }
}
