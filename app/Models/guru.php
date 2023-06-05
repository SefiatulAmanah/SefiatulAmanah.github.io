<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_guru';
    protected $table = 'gurus';
    protected $fillable = ['nama','alamat','tempat_lahir','tgl_lahir','agama','pengajar'];

    public function matapelajararan(){
            return $this->hasMany(matapelajaran::class);
        }
    }
