<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walimurid extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_walimurid';
    protected $table = 'walimurids';
    protected $fillable = [
        'id_murid',
        'nama_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'alamat_ibu',
        'telp_ibu',
        'nama_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'alamat_ayah',
        'telp_ayah',
        'nama_wali',
        'pekerjaan_wali',
        'penghasilan_wali',
        'alamat_wali',
        'telp_wali'
    ];

    public function murid()
    {
        return $this->belongsTo(murid::class,  'id_murid');
    }
}
