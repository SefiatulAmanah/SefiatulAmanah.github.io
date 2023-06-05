<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeUnit\TraitMethodUnit;

class matapelajaran extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_matapelajaran';
    protected $table = 'mata_pelajarans';
    protected $fillable = ['pelajaran','pembelajaran','id_jurusan','id_guru','tahun'];

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan','id_jurusan');
    }

    public function guru()
    {
        // return $this->hasMany(guru::class);
         return $this->belongsTo(guru::class, 'id_guru','id_guru');
    }
}
