<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $primaryKey = 'id_murid';
    protected $table = 'murids';
    protected $fillable = ['NIS','nama','tempat_lahir','tgl_lahir','jenis_kelamin','agama','id_jurusan','ekstrakurikuler'];

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan','id_jurusan');
    }

    use HasFactory;

}
