<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_kelas';
    protected $table = 'kelas';
    protected $fillable = ['kelas','id_guru','id_jurusan'];

    public function guru()
    {
        return $this->belongsTo(guru::class, 'id_guru');
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class, 'id_jurusan');
    }
    public function jadwal(){
        return $this->hasMany(jadwal::class);
    }
}
