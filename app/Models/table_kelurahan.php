<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_kelurahan extends Model
{
    protected $table = "kelurahan_table";

    public function kecamatan(){
        return $this->belongsTo(table_kecamatan::class, 'id', 'id_kelurahan');
    }

    public function posyandu(){
        return $this->hasMany(table_posyandu::class, 'id_kelurahan', 'id');
    }
}
