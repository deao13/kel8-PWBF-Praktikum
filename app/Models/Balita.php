<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    protected $table = "balita";
    protected $fillable = ['nama_balita', 'nik_ortu', 'nama_ortu', 'tgllahir_balita', 'jk_balita', 'status'];

    public function posyandu(){
        return $this->belongsTo(Posyandu::class, 'id', 'id_posyandu');
    }

    public function histori_posyandu(){
        return $this->hasMany(HistoriPosyandu::class, 'id_histori_posyandu', 'id');
    }
}
