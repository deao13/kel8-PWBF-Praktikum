<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_balita extends Model
{
    protected $table = "balita_table";

    public function posyandu(){
        return $this->belongsTo(table_posyandu::class, 'id', 'id_posyandu');
    }

    public function histori_posyandu(){
        return $this->hasMany(table_histori_posyandu::class, 'id_histori_posyandu', 'id');
    }
}
