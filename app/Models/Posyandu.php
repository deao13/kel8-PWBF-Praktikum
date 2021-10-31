<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    protected $table = "posyandu";
    protected $fillable = ['nama', 'alamat', 'id_kelurahan'];

    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class, 'id', 'id_kelurahan');
    }

    public function balita(){
        return $this->hasMany(Balita::class, 'id_posyandu', 'id');
    }
}
