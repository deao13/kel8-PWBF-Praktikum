<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_posyandu extends Model
{
    protected $table = "posyandu_table";
    protected $fillable = ['nama_posyandu', 'alamat_posyandu'];

    public function kelurahan(){
        return $this->belongsTo(table_kelurahan::class, 'id', 'id_kelurahan');
    }

    public function balita(){
        return $this->hasMany(table_balita::class, 'id_posyandu', 'id');
    }
}
