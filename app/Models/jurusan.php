<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    protected $primaryKey = 'id_jurusan';
    protected $table = 'jurusans';
    public $timestamps = false;
    protected $fillable = ['jurusan'];
    use HasFactory;

    public function murid(){
        return $this->hasMany(murid::class);
    }

    public function matapelajaran(){
        return $this->hasMany(matapelajaran::class);
    }
    public function jadwal(){
        return $this->hasMany(jadwal::class);
    }
}
